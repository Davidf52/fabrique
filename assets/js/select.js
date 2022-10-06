// const btn = document.getElementById("btn");

// btn.onclick = () => document.body.style.backgroundColor = "blue";

// console.log("helloworld");

// function openImg(){
//     var image = document.getElementById('image');
//     var source = image.src;
// }

// openImg.onclick = () => document.body.style.borderColor = "2px solid blue";

// let img = document.getElementById('image')


// function passageDeLaSouris() {
//     document.body.style.borderColor = "2px yellow solid"; 
// }

// let image = document.getElementById('testdeux').getElementsByClassName('marquage') ;
// // let image = document.getElementsByClassName('ttmarquageEurope marquage');

// function modif(e) {
//     image.style.border='8px solid #efb74f';
// }


// function select(e) {
// image.addEventListener('image' , modif(e));
// }


//SELECTEURS//
const ttmarq = document.querySelector(".ttmarque")
const marq = document.querySelectorAll(".marquage");

//FONCTIONS 
for (let i = 0; i < marq.length; i++){
    marq[i].addEventListener("click",function(e){
        marq[i].style.border='8px solid #efb74f';
    })
}

for (let i = 0; i < marq.length; i++){
    marq[i].addEventListener("dblclick",function(e){
        marq[i].style.border='none';
    })
}
const ttquant = document.querySelector("qtmarquage");
const quant = document.querySelectorAll(".quantiti"); 

//FONCTIONS 
for (let i = 0; i < quant.length; i++){
    quant[i].addEventListener("click",function(e){
        quant[i].style.border='3px solid #efb74f';
    })
}

for (let i = 0; i < quant.length; i++){
    quant[i].addEventListener("dblclick",function(e){
        quant[i].style.border='none';
    })
}

// MODALE //

let modalBtns = [...document.querySelectorAll(".button")];
modalBtns.forEach(function (btn) {
  btn.onclick = function () {
    let modal = btn.getAttribute("data-modal");
    document.getElementById(modal).style.display = "block";
  };
});
let closeBtns = [...document.querySelectorAll(".close")];
closeBtns.forEach(function (btn) {
  btn.onclick = function () {
    let modal = btn.closest(".modal");
    modal.style.display = "none";
  };
});
window.onclick = function (event) {
  if (event.target.className === "modal") {
    event.target.style.display = "none";
  }
};
