const formCad = document.getElementById('form-cad');

if(formCad){
    formCad.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm = new FormData(formCad);

        const dados = await fetch("api/cad_user.php",{
            method: "POST",
            body: dadosForm
        });
    
        const resposta = await dados.json();
        console.log(resposta);

        if(resposta['status']){

             window.location = "../trampo/views/cad_cv/etap1.php";

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