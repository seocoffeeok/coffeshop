let navbar=document.querySelector(".nav-menu").classList,active_class="nav-menu__scrolled";window.addEventListener("scroll",(a=>{pageYOffset>500?navbar.add(active_class):navbar.remove(active_class)}));