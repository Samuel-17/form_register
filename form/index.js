//Select input box
const box1 = document.querySelectorAll('input')[3];
const box2 = document.querySelectorAll('input')[4];

// toggle function element 1
box1.onclick = function(){
    box1.classList.toggle('active');
    box2.checked = false;
}

// toggle function element 2
box2.onclick = function(){
    box2.classList.toggle('active');
    box1.checked = false;
}



