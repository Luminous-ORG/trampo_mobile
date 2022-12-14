const formCad1 = document.getElementById('form-cad-dados');

if(formCad1){
    formCad1.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm1 = new FormData(formCad1);

        const dados1 = await fetch("../../api/cad_dados.php",{
            method: "POST",
            body: dadosForm1
        });
    
        const resposta1 = await dados1.json();
        console.log(resposta1);

        if(resposta1['status']){

            Swal.fire({
                text: resposta1['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
              }).then((result) => {
                if (result.isConfirmed) {
                window.location = "etap2.php";
                 }else{
                window.location = "etap2.php";                 
                 }
              })

        }else{
            Swal.fire({
              text: resposta1['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}