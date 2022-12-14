const formCad4 = document.getElementById('form-cad-obj');

if(formCad4){
    formCad4.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm4 = new FormData(formCad4);

        const dados4 = await fetch("../../api/cad_obj.php",{
            method: "POST",
            body: dadosForm4
        });
    
        const resposta4 = await dados4.json();
        console.log(resposta4);

        if(resposta4['status']){

            Swal.fire({
                text: resposta4['msg'],
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
              text: resposta4['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}