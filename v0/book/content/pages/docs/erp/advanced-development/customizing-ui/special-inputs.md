# Special inputs

### Tags Input

The Tags input shows tags from the **source** tag model using a cross-table tag model.

After creating a cross-table tag model, you can create a Tag input element using the ADIOS Tag component. This displays the tag names created in the **source** Tag model and displays them in the input using the cross-table for the specified model.

For the Tag Input component you need to:
- specify the source `model` for the original tags
- `value`, the value that will contain the saved tags (usually the data of a relation)
- `sourceColumn` specifying the ID of the source tag
- `targetColumn` specifying the ID of the cross-table model's entry
- `colorColumn` specifying the color column of the source tag model

```tsx
<FormInput title="Tags">
  <InputTags2
    {...this.getDefaultInputProps()}
    model="Hubleto/App/Settings/Models/Tag"
    value={this.state.record.TAGS}
    targetColumn="id_company"
    sourceColumn="id_tag"
    colorColumn="color"
    onChange={(value: any) => {
      this.updateRecord({ TAGS: value });
    }}
  />
</FormInput>
```