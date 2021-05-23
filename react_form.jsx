class Example extends Component {

    handleTogglePublicAnswer(event) {
        event.preventDefault();
        this.setState(prevState => ({
            togglePublicAnswer: !prevState.togglePublicAnswer,
        }));
    }

    handlePublicAnswer = () => {
        const courierIri = this.props.courier["@id"]
        const data = { publicAnswer: this.state.publicAnswer }

        try {
            courierManagerAPI.patchCourier(courierIri, data).then((courier) => {
                this.props.updateCourierInList(courier)
            })
        } catch (error) {
            console.log(error)
        }
    }

    render() {
        return (
            <AvForm
                onValidSubmit={this.handleValidMessageSubmit}
                className="needs-validation mt-2"
                noValidate
                name="public-answer"
                id="public-answer">
                <AvField
                    name="public-answer"
                    placeholder="Réponse publique"
                    type="textarea"
                    rows="5"
                    value={this.state.publicAnswer}
                    onChange={element => {
                        console.log(element.target.value)
                    }}
                />

                {this.props.courier.publicAnswer === '' && (
                    <Button className="btn-sm mt-1 float-right" color="primary" onClick={this.handlePublicAnswer}>
                        <i className="mdi mdi-pencil-outline mr-1"></i>Publier
                    </Button>
                ) || (
                    <Button className="btn-sm mt-1 float-right" color="success" onClick={this.handlePublicAnswer}>
                        <i className="mdi mdi-pencil-outline mr-1"></i>Modifier
                    </Button>
                )}

            </AvForm>
        )
    }
}
