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

```javascript
const data = await categoryManager.findAll();
const all2 = Object.assign({name: "All"}, data)
console.log("all2", all2)
```

RETURN:
```
7: Object { "@id": "/api/categories/2955", "@type": "Category", id: 2955, … }
8: Object { "@id": "/api/categories/2958", "@type": "Category", id: 2958, … }
9: Object { "@id": "/api/categories/2956", "@type": "Category", id: 2956, … }
10: Object { "@id": "/api/categories/2957", "@type": "Category", id: 2957, … }
name: "All"
```
