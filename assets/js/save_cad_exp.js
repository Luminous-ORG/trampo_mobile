const formCad5 = document.getElementById('form-save-exp');

if(formCad5){
    formCad5.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm5 = new FormData(formCad5);

        const dados5 = await fetch("../../api/cad_exp.php",{
            method: "POST",
            body: dadosForm5
        });
    
        const resposta5 = await dados5.json();
        console.log(resposta5);

        if(resposta5['status']){

            Swal.fire({
                text: resposta5['msg'],
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
              text: resposta5['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}