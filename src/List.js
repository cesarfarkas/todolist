import React, { useEffect, useState } from "react";
import api from "./Api";
import './estilos/List.css'

export default function App() {
    
    const [listaTarefas, setlistaTarefas] = useState();
  
    useEffect(() => {
      api
        .get("/tarefas")
        .then((response) => setlistaTarefas(response.data))
        .catch((err) => {
          console.error("ops! ocorreu um erro" + err);
        });
    }, []);
  
    return (
        <div>
            { listaTarefas?.data.map(valor => <div className="tarefa">{valor.titulo}</div>) }
        </div>
    );
  }