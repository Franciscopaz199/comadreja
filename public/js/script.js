//Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaramos variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

//Evento para mostrar y ocultar menú
    function open_close_menu(){
        body.classList.toggle("body_move");
        side_menu.classList.toggle("menu__side_move");
    }

//Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página

if (window.innerWidth < 760){

    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//Haciendo el menú responsive(adaptable)

window.addEventListener("resize", function(){
    if (window.innerWidth < 760){
        side_menu.classList.add("menu__side_move");
        
    }
});

const handleDropdownClicked = (event) => {
    event.stopPropagation();
    const dropdown = document.getElementById("dropdown");
    toggleDropdown(!dropdown?.classList?.contains("open"));
  };
  
  const handleSubMenuClicked = (menu) => {
    if (menu) {
      const subMenus = document.getElementsByClassName("sub-menu");
      for (let s of subMenus) {
        s.classList.remove("open");
      }
      const subMenu = document.getElementById(menu);
      subMenu.classList.add("open");
    }
  
    const mainMenu = document.getElementById("menu-inner");
    mainMenu.classList.toggle("open");
  };
  
  const toggleDropdown = () => {
    const dropdown = document.getElementById("dropdown");
    dropdown.classList.toggle("open");
  };
  