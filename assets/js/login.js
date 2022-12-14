function mostrarOcultarSenha(){
    var senha = document.getElementById("senha");
    if(senha.type == "password"){
        senha.type = "text";
    }else{
        senha.type = "password";
    }
}

function mostrarOcultarSenha1(){
    var senha = document.getElementById("senhacad");
    if(senha.type == "password"){
        senha.type = "text";
    }else{
        senha.type = "password";
    }
}

function mostrarOcultarSenha2(){
    var senha = document.getElementById("consenhacad");
    if(senha.type == "password"){
        senha.type = "text";
    }else{
        senha.type = "password";
    }
}

const formLogin = document.getElementById('form-login');

if(formLogin){
    formLogin.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm = new FormData(formLogin);

        const dados = await fetch("api/login_user.php",{
            method: "POST",
            body: dadosForm
        });
    
        const resposta = await dados.json();
        console.log(resposta);

        if(resposta['status']){
           
            window.location = "../trampo/views/restrito/";

           
        }else{
            Swal.fire({
              text: resposta['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
            
        }

    });
}



/*
function alert(){
    Swal.fire('Sucesso','Login realizado com sucesso!','success');
}

alert();
*/
