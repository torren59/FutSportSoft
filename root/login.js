function logintosave(){
    let div1=document.getElementById("login");
    let div2=document.getElementById("save");
    let estado = div1.classList.contains("login-form-block-on");

    if(estado==true){
        div1.classList.remove("login-form-block-on");
        div2.classList.add("login-form-block-on");
    }
    else{
        div2.classList.remove("login-form-block-on");
        div1.classList.add("login-form-block-on");
    }
}

function swal_rescue(){
    Swal.fire({
        title: 'Enviado',
        text: 'Código enviado al correo',
        icon: 'success',
    });
}