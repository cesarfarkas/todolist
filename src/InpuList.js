import React, { useState } from "react"
import axios from 'axios'
import './estilos/inputlist.css'

class InputList extends React.Component {

    constructor(props){

        super(props);
        this.state = {value: ''};
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        this.setState({value: event.target.value});
    }

    handleSubmit(event) {

        let valorInput =  this.state.value;

        if(valorInput.length > 60){
            alert("O tarefa não pode ter mias de 60 caracteres.");
        }
        event.preventDefault();
    }

    render() {
        return (
            <div className="input-list">
                <form onSubmit={this.handleSubmit}>
                <input type="text" placeholder="Adicione uma tarefa" onChange={this.handleChange} />
                <button type="submit">Adicionar</button>
                </form>
            </div>
        );
    }
}

export default InputList