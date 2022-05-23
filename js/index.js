window.onload = main;

function main(){
    function resetActive(){
        document.getElementById("inicio").classList.remove("menu__item--current");
        document.getElementById("sobreNosotros").classList.remove("menu__item--current");
        document.getElementById("trabajadores").classList.remove("menu__item--current");
        document.getElementById("fotos").classList.remove("menu__item--current");
        document.getElementById("habitaciones").classList.remove("menu__item--current");
        document.getElementById("contacto").classList.remove("menu__item--current");
    }
    
    document.getElementById('menu').addEventListener('click', (event) => {
        let id = document.getElementById(event.target.parentNode.id) 
        console.log(id)
        resetActive();
        id.className = "menu__item--current";
    })
}