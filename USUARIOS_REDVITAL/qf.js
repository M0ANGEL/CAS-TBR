const btnMEnu = document.querySelector(".btn-ol");

btnMEnu.addEventListener("click", function(){
    document.getElementById("container-menu").classList.toggle("active");

})

function cambio(){
    document.getElementById('cambio_contra').style.display='block';
    document.getElementById('tabla_usu').style.display='none';
    
    
}

