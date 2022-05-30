<Button 
  className=""
  color="primary"
  onClick={() => {
    this.setState(prevState => ({
      modalCreateUser: !prevState.modalCreateUser,
      user: null,
    }));
  }}>
  Ajouter
</Button>

<ModalCreateUser
  onToggle={() => {
    this.setState(prevState => ({
      modalCreateUser: !prevState.modalCreateUser,
    }));
  }}
  modal={this.state.modalCreateUser}
  handleFetchUsers={this.fetchUsers}
  services={this.state.services}
/>

{/* Select in Modal */}
<Select....
  defaultValue={this.props.services.find(service => service.value == 'none')}>
</Select>

{/*  */}
defaultValue = () => {
 if (this.props.user.service === undefined) {
  return this.props.services.find(service => service.value == 'none')
 }

 return this.props.services.find(service => service.value == this.props.user.service.id)
}

<Select
  placeholder={"Service"}
  isMulti={false}
  className="react-select"
  classNamePrefix="react-select"
  value={this.state.service}
  defaultValue={this.defaultValue()}
  onChange={(service) => this.setState({service: service})}
  options={this.props.services}
>
</Select>
