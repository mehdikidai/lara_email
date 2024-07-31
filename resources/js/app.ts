import './bootstrap';


const loginForm = <HTMLElement | null>document.getElementById('login_a');

const list_input = document.querySelectorAll('.bx input')



window.addEventListener('load',()=>{

    list_input.forEach(el=>{
        console.log(el)
        el.value = ''
    })

})





