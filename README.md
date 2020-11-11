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
console.log(this.state.categoryFilter)
```

RETURN:
```
0: Object { name: "All" }
1: Object { "@id": "/api/categories/3004", "@type": "Category", id: 3004, … }
2: Object { "@id": "/api/categories/3005", "@type": "Category", id: 3005, … }
3: Object { "@id": "/api/categories/3001", "@type": "Category", id: 3001, … }
4: Object { "@id": "/api/categories/3000", "@type": "Category", id: 3000, … }
```
