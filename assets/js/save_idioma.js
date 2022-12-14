const formCad7 = document.getElementById('form-save-idioma2');

if(formCad7){
    formCad7.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm7 = new FormData(formCad7);

        const dados7 = await fetch("../../api/save_idioma.php",{
            method: "POST",
            body: dadosForm7
        });
    
        const resposta7 = await dados7.json();
        console.log(resposta7);

        if(resposta7['status']){

            Swal.fire({
                text: resposta7['msg'],
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
              text: resposta7['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}