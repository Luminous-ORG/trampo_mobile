const formCad = document.getElementById('form-cad');

if(formCad){
    formCad.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm = new FormData(formCad);

        const dados = await fetch("../../api/save_conta.php",{
            method: "POST",
            body: dadosForm
        });
    
        const resposta = await dados.json();
        console.log(resposta);

        if(resposta['status']){

            Swal.fire({
                text: resposta['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
              }).then((result) => {
                if (result.isConfirmed) {
                location.reload('perfil.php');
                 }else{
                        location.reload('perfil.php');         
                 }
              })

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