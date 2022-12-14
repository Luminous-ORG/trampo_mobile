const formCad6 = document.getElementById('form-save-exp2');

if(formCad6){
    formCad6.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm6 = new FormData(formCad6);

        const dados6 = await fetch("../../api/save_exp.php",{
            method: "POST",
            body: dadosForm6
        });
    
        const resposta6 = await dados6.json();
        console.log(resposta6);

        if(resposta6['status']){

            Swal.fire({
                text: resposta6['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3086d6',
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
              text: resposta6['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3086d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}