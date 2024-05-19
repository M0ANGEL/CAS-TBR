const btnMEnu = document.querySelector(".btn-ol");

btnMEnu.addEventListener("click", function(){
    document.getElementById("container-menu").classList.toggle("active");

})




function mostrarPermisos(){
    document.getElementById('permisos').style.display='block';
    document.getElementById('bodega').style.display='none';
    document.getElementById('crear').style.display='none';
}

function mostrarCrear(){
    document.getElementById('permisos').style.display='none';
    document.getElementById('bodega').style.display='none';
    document.getElementById('crear').style.display='block';
}

function mostrarBodega(){
    document.getElementById('permisos').style.display='none';
    document.getElementById('bodega').style.display='block';
    document.getElementById('crear').style.display='none';
}