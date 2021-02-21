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
