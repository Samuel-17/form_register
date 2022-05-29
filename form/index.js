//Select input box
const box1 = document.getElementById('boxMasculine');
const box2 = document.getElementById('boxFeminine');

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



