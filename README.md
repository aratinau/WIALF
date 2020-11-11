# WIALF - What I'm Always Looking For

## JavaScript

### Merge two arrays of object

```javascript
const data = await categoryManager.findAll();
const all = [{name: "All"}]
const categories = all.concat(data);
this.setState({
categoryFilter: categories,
});
const all2 = Object.assign({name: "All"}, data)
```

RETURN:
```
8: Object { "@id": "/api/categories/2958", "@type": "Category", id: 2958, … }
9: Object { "@id": "/api/categories/2956", "@type": "Category", id: 2956, … }
10: Object { "@id": "/api/categories/2957", "@type": "Category", id: 2957, … }
name: "All"
```
