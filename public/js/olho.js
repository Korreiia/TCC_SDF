// function mostrarSenha(){
//     let btn = document.querySelector('.fa-eye')
//     btn.addEventListener('click',()=>{
//         let inputsenha = document.querySelector('#senha')
    
//         if(inputsenha.getAttribute('type')=='password'){
//             inputsenha.setAttribute('type','text')
//         }else{
//             inputsenha.setAttribute('type','password')
// }
//     })
// }

function mostrarSenha() {
    let btn = document.querySelector('.fa-eye');
    let inputsenha = document.querySelector('#senha');
    
    if (inputsenha.getAttribute('type') == 'password') {
      inputsenha.setAttribute('type', 'text');
    } else {
      inputsenha.setAttribute('type', 'password');
    }
  
    // Remover listener de evento anterior, se houver
    btn.removeEventListener('click', mostrarSenha);
  
    // Adicionar listener de evento atualizado
    btn.addEventListener('click', mostrarSenha);
  }
  