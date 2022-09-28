//buscarpor id
const id = str=>document.getElementById(str);

//buscar por regla css
const query = (reglacss,one=false)=>one===true?
        document.querySelector(reglacss):
        document.querySelectorAll(reglacss);

//crear elemento
const create = (str,propiedades={})=> Object.assign(document.createElement(str),propiedades);



//funcion para append
const append = (hijos,padre=document.body)=>{
    hijos.lenght ? hijos.map(hijo=>padre.appendChild(hijo)):
                   padre.appendChild(hijos);
    
}





