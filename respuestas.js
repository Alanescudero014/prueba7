if(localStorage.res1 == null){
    res1 = 0;
}else{
    res1 = localStorage.res1;
}
if(localStorage.res1 == 1){
    function checkByDefault(){
        document.getElementById("a1").checked = true;      
    }

    window.addEventListener('DOMContentLoaded', checkByDefault);
}else if(localStorage.res1 == 2){
    function checkByDefault(){
        document.getElementById("b1").checked = true;     
    }
    window.addEventListener('DOMContentLoaded', checkByDefault);
}else if(localStorage.res1 == 3){
    function checkByDefault(){
        document.getElementById("c1").checked = true;     
    }
    window.addEventListener('DOMContentLoaded', checkByDefault);
}

// DAR CLIC 

function ar1(){
    res1 = document.querySelector('input[name=res1]:checked').value;
    console.log(res1);
    localStorage.res1 = 1;
}
function br1(){
    res1 = document.querySelector('input[name=res1]:checked').value;
    console.log(res1);
    localStorage.res1 = 2;
}
function cr1(){
    res1 = document.querySelector('input[name=res1]:checked').value;
    console.log(res1);
    localStorage.res1 = 3;
}

/*******************************  PREGUNTA2  **************************************/
if(localStorage.res1 == null){
    res2 = 0;
}else{
    res2 = localStorage.res2;
}
if(localStorage.res2 == 1){
    function checkByDefault(){
        document.getElementById("a2").checked = true;      
    }

    window.addEventListener('DOMContentLoaded', checkByDefault);
}else if(localStorage.res2 == 2){
    function checkByDefault(){
        document.getElementById("b2").checked = true;     
    }
    window.addEventListener('DOMContentLoaded', checkByDefault);
}else if(localStorage.res2 == 3){
    function checkByDefault(){
        document.getElementById("c2").checked = true;     
    }
    window.addEventListener('DOMContentLoaded', checkByDefault);
}

// DAR CLIC 

function ar2(){
    res2 = document.querySelector('input[name=res2]:checked').value;
    console.log(res2);
    localStorage.res2 = 1;
}
function br2(){
    res2 = document.querySelector('input[name=res2]:checked').value;
    console.log(res2);
    localStorage.res2 = 2;
}
function cr2(){
    res2 = document.querySelector('input[name=res2]:checked').value;
    console.log(res2);
    localStorage.res2 = 3;
}
//BOTÓN PARA GUARDAR

function guardar(){
    delete localStorage.res1;
    delete localStorage.res2;
    window.addEventListener('DOMContentLoaded', checkByDefault);
}