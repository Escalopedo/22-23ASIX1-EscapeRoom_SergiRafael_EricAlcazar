let mostrar_pista = document.querySelector(".pista");
let btnmostrar=document.querySelector("#mostrar");

mostrar_pista.style.display="none";
btnmostrar.addEventListener("click",(e) =>{
    e.preventDefault();
    mostrar_pista.style.display="block";
})
