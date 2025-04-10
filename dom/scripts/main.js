// gombok kiválasztása:
const prevBtn = document.querySelector('button.btn:nth-child(1)');
const numBtn = document.querySelector('button.btn:nth-child(2)');
const nextBtn = document.querySelector('button.btn:nth-child(3)');
let counter = 1;

prevBtn.classList.add('btn-info');

// több elem lekérése egyszerre
const buttons = document.querySelectorAll('.btn-group button.btn');
['btn-info', 'btn-primary', 'btn-info'].forEach( (className, index) => {
    buttons[index].classList.add(className);
});

//eseménykezelők beállítása a gombokra
buttons[0].addEventListener('click', (e) => {
    console.log(e);
    //e.stopPropagation();           bubi kiszúrása
    if(counter < 2)
    {
        return;
    }
    counter--;

    buttons[1].innerHTML = counter;
});

// document.body.addEventListener('click' (e) => {
//    console.log(e);
//});

buttons[2].addEventListener('click', (e) => {
    counter++;

    buttons[1].innerHTML = counter;
});

