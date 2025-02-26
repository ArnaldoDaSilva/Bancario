function login(){
    const nome= document.getElementById('nome').value;
    const password= document.getElementById('pass').value;
    const error=document.getElementById('errorMessage')

    const usuario="Arnaldo";
    const pass="1234";
     

    if(nome==usuario && password===pass){
        localStorage.setItem("loggedIn", "true");
         setTimeout(()=>{
            window.location.href="pages/MenuGerenciavel.html";
         });
      
    }
    else{
        error.textContent="Usuario ou senha incorreta!";
    }

}