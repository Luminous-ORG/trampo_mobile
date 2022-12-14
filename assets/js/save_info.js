const formCad3 = document.getElementById('form-cad-info');

if(formCad3){
    formCad3.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm3 = new FormData(formCad3);

        const dados3 = await fetch("../../api/cad_info.php",{
            method: "POST",
            body: dadosForm3
        });
    
        const resposta3 = await dados3.json();
        console.log(resposta3);

        if(resposta3['status']){

            Swal.fire({
                text: resposta3['msg'],
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
              text: resposta3['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}