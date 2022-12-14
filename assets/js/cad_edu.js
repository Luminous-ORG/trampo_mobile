const formCad2 = document.getElementById('form-cad-edu');

if(formCad2){
    formCad2.addEventListener("submit",async (e) =>{
       
        e.preventDefault();
    
        const dadosForm2 = new FormData(formCad2);

        const dados2 = await fetch("../../api/cad_edu.php",{
            method: "POST",
            body: dadosForm2
        });
    
        const resposta2 = await dados2.json();
        console.log(resposta2);

        if(resposta2['status']){

            Swal.fire({
                text: resposta2['msg'],
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
              }).then((result) => {
                if (result.isConfirmed) {
                window.location = "etap3.php";
                 }else{
                window.location = "etap3.php";                 
                 }
              })

        }else{
            Swal.fire({
              text: resposta2['msg'],
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Fechar'
            });
        }

    });
}