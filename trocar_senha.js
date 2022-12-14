const formCad5 = document.getElementById('troca');

if(formCad5){
    formCad5.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm5 = new FormData(formCad5);

        const dados5 = await fetch("./trocar_senha.php",{
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
                    window.location = "index.php";
                 }else{
                    window.location = "index.php";
                 }
              });

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