# Custom Invoice Templates

In Hubleto, you can create custom invoice templates that modify the look, feel, and data of generated PDF invoices.

## Introduction

These templates are stored in the database and rely on the Twig templating engine.

Most templates only require HTML/CSS styling and the usage of predefined variables. It is recommended to keep your custom Twig templates in a custom project folder (e.g., `src/views/documents/`) rather than modifying the core ERP files directly.

## Accessing the Standard Invoice Data

Inside a custom Twig template, you automatically have access to a rich set of pre-loaded variables from the `Invoice` model. You do not need to write any queries to access these.

The most commonly used variables include:
*   `number` (e.g., "INV-2023-001")
*   `vs`, `ss`, `cs` (Payment symbols)
*   `date_issue`, `date_due`, `date_delivery`
*   `total_excl_vat`, `total_incl_vat`

### Customer and Profile Objects

Data relating to the buyer (`CUSTOMER`) and the seller (`PROFILE`) are fully loaded with their relations:

###### Example usage
```twig
<p>Seller: {{ PROFILE.COMPANY.name }}</p>
<p>IBAN: {{ PROFILE.iban }}</p>

<p>Buyer: {{ CUSTOMER.name }}</p>
<p>Address: {{ CUSTOMER.street_line_1 }}, {{ CUSTOMER.city }}</p>
```

*Note: If you add custom columns to the `Customer` model (for instance, a custom `phone` or `date_of_birth` field in `ConfigEnv.php`), they are automatically appended to the `CUSTOMER` object and become immediately accessible in your template (e.g., `{{ CUSTOMER.phone }}`).*

## Formatting Helpers

Hubleto provides a locale service to correctly format currencies, numbers, and dates according to the system's settings. You can access it via the `hubleto.locale()` method:

###### Formatting examples
```twig
{# Formatting Currency #}
<p>Total: {{ hubleto.locale().formatCurrency(total_incl_vat, CURRENCY.symbol) }}</p>

{# Formatting Dates #}
<p>Due Date: {{ hubleto.locale().formatDateShort(date_due) }}</p>

{# Formatting Numbers (e.g., 2 decimal places) #}
<p>Amount: {{ hubleto.locale().formatNumber(item.amount, 2) }}</p>
```

## Looping Over Invoice Items

To display the products or services billed, you iterate over the `ITEMS` array. A standard implementation looks like this:

###### Iterating over items
```twig
<table>
  <thead>
    <tr>
      <th>Item</th>
      <th>Amount</th>
      <th>Unit Price</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    {% for i in ITEMS %}
    <tr>
      <td>{{ i.item }}</td>
      <td>{{ hubleto.locale().formatNumber(i.amount, 0) }}</td>
      <td>{{ hubleto.locale().formatCurrency(i.unit_price, CURRENCY.symbol) }}</td>
      <td>{{ hubleto.locale().formatCurrency(i.price_incl_vat, CURRENCY.symbol) }}</td>
    </tr>
    {% endfor %}
  </tbody>
</table>
```

## Rendering PayBySquare QR Codes

Hubleto provides a built-in variable `PAY_BY_SQUARE_QR_CODE` which contains a generated QR code image data URI for the remaining balance on the invoice.

To render this in your template, simply place it inside an image tag:

###### QR Code example
```twig
{% if PAY_BY_SQUARE_QR_CODE %}
  <img src="{{ PAY_BY_SQUARE_QR_CODE }}" style="width: 100px;" />
{% endif %}
```

*Troubleshooting:* If the QR code doesn't generate, ensure you have the required Composer packages (`hubleto/pay-by-square-encoder` and `endroid/qr-code`). On Windows environments, the encoder also requires a valid path to an `xz` compression binary, which must be specified in `ConfigEnv.php` (e.g., `$config['xzPath'] = 'C:\path\to\your\xz.exe';`).

## Deploying the Template to the Database

Because templates are rendered from the `documents_templates` database table, simply adding a `.twig` file to your workspace will not make it appear in the UI dropdown.

To install your newly created template without resetting the entire ERP database, you can write a short PHP helper script to insert it:

###### insert-template.php
```php
<?php
require_once __DIR__ . '/boot.php';

$mTemplate = $hubleto->getService(\Hubleto\App\Community\Documents\Models\Template::class);

$templateName = 'My Custom Invoice Template';
$usedFor = 'custom-invoice-slug';
$templateFile = __DIR__ . '/src/views/documents/MyCustomTemplate.twig';

if (file_exists($templateFile)) {
  $existing = $mTemplate->record->where('used_for', $usedFor)->first();
  
  if ($existing) {
    $existing->update([
      'name' => $templateName,
      'content' => file_get_contents($templateFile),
    ]);
    echo "Template updated.\n";
  } else {
    $mTemplate->record->recordCreate([
      'name' => $templateName,
      'used_for' => $usedFor,
      'content' => file_get_contents($templateFile),
    ]);
    echo "Template inserted.\n";
  }
} else {
  echo "File not found.\n";
}
```

## Final result

Run the script from your terminal (`php insert-template.php`), and your template will instantly become available in the Invoices app!

## Conclusion

You can create custom templates to satisfy different business needs. By keeping your Twig files in your custom module and registering them via script, you ensure your changes are version-controlled and easily deployable.