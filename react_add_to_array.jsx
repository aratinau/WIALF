this.state = {
  fileUpload: null,
  courierFileType: null,
  errors: []
};

if (this.state.fileUpload === null) {
  this.setState(prevState => ({
    errors: [...prevState.errors, 'Veuillez choisir un document à ajouter']
  })) 
}

{this.state.errors.map(error =>
  <span>{error}</span>
)}

////////////////////// 
this.setState({ myArray: [...this.state.myArray, 'new value'] }) //simple value
this.setState({ myArray: [...this.state.myArray, ...[1,2,3] ] }) //another array

////////////////////// using concat

await serviceManager.findAll().then((response) => {
  this.setState({
    services: response.map(({id, name}) => ({
      value: id,
      label: name
    })).concat({
      value: 'none',
      label: 'Aucun'
    })
  })
})
