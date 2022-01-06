import React, { useState } from "react"
import axios from 'axios'
import './estilos/List.css'

export default class List extends React.Component {

     state = {listaTarefas:[]};

    componentDidMount() {

        axios.get(`http://127.0.0.1:8000/api/tarefas`)
            .then(res => {
                const dados = res.data;
                this.setState((state) => {
                    // Importante: use `state` em vez de `this.state` quando estiver atualizando.
                    return {dados}
                  });
            })

    }

    render() {
        return(
            <div>
                { this.state.listaTarefas.map(item => <div className="tarefa">{item.titulo}</div>)}
            </div>
        );
    }
}