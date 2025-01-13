# Special Input Component Types

### Tags Input

After creating a Tag model for a specific model, you can create a Tag input element using the ADIOS Tag component. This displays the tags names created in the Tag model and displays them in the input using the cross-table for the specified model and the Tag model.

For the Tag Input component you need to specify the `model` the tags were created in, `targetColumn` specifying the ID of the connected model's entry, `sourceColumn` specifying the ID of the Tag and `colorColumn` specifying the column for the color for the displayed tags in the model they were created in.

```tsx
<FormInput title="Tags">
  <InputTags2
    {...this.getDefaultInputProps()}
    value={this.state.record.TAGS}
    model="HubletoApp/Settings/Models/Tag"
    targetColumn="id_company"
    sourceColumn="id_tag"
    colorColumn="color"
    onChange={(value: any) => {
      this.updateRecord({ TAGS: value });
    }}
  />
</FormInput>
```