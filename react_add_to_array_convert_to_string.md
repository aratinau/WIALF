// Comment convertir des elements qui sont pas toujours là en string.

```js
output = element.nameFrom
            + ' - '
            + element.subject
            + ' - '
            + element.owner.firstName
            + ' '
            + element.owner.lastName
```

// transformer owner en owners

`element.owners.map(o => o.firstName + ' ' + o.lastName).join (', ')`

// transformation en array du tout

```js
output = [
    element.nameFrom,
    element.subject,
    element.owners.map(o => o.firstName + ' ' + o.lastName).join (', ')
].join(' - ')
```

// ajout au tableau avec condition

```js
output = [
        ...(element.nameFrom !== '' ? [element.nameFrom] : []),
        ...(element.subject !== '' ? [element.subject] : []),
        ...(element.owners.length !== 0 ? [element.owners.map(o => o.firstName + ' ' + o.lastName).join (', ')] : [])
].join(' - ')
```

// source: https://2ality.com/2017/04/conditional-literal-entries.html#is-it-worth-it%3F
