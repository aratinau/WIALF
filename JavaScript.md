# JavaScript

## find string in arrays and return array

```js
function handleChange(event) {
    let value = event.target.value
    setValue(value);

    let result = [];
    allImages.forEach((image) => {
        if (image.includes(value)) {
            result.push(image)
        }
    })

    if (event === '') {
        result = allImages
    }

    setImages(result)
}
```

### update item in array

```js
updateListCourier = (courier) => {
    let foundIndex = this.state.allCouriers.findIndex(x => x["@id"] == courier["@id"]);
    let newStateCouriers = this.state.allCouriers[foundIndex]
    newStateCouriers.subject = "toto")
}
```
