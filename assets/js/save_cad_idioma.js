const formCad8 = document.getElementById('form-cad-idioma');

if(formCad8){
    formCad8.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm8 = new FormData(formCad8);

        const dados8 = await fetch("../../api/cad_idioma.php",{
            method: "POST",
            body: dadosForm8
        });
    
        const resposta8 = await dados8.json();
        console.log(resposta8);

        if(resposta8['status']){

            Swal.fire({
                text: resposta8['msg'],
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
              text: resposta8['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}