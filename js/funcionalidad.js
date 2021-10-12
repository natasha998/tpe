document.addEventListener("DOMContentLoaded",
()=>{
    "use strict";
    
    

    document.querySelector("#editarCategoria").addEventListener("click",()=>{
        let mostrarInputs = document.querySelector('.formCatEditar');
        mostrarInputs.classList.toggle('ocultaEditar');
    });

    document.querySelector("#agregarCategoria").addEventListener("click",()=>{
        let mostrarInputs = document.querySelector('.formCatAgregar');
        mostrarInputs.classList.toggle('ocultaAgregar');
    });

    document.querySelector("#borrarCategoria").addEventListener("click",()=>{
        alert("Antes de borrar una categoria debe borrar todos los productos asociados a ella")
    });

    document.querySelector("#editarProd").addEventListener("click",()=>{
        let mostrarInputs = document.querySelector('.formProdEditar');
        mostrarInputs.classList.toggle('ocultaEditarProd');
    });

    document.querySelector("#agregarProd").addEventListener("click",()=>{
        let mostrarInputs = document.querySelector('.formProdAgregar');
        mostrarInputs.classList.toggle('ocultaAgregarProd');
    });

})