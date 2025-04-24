const peeling = document.getElementById("peeling");
const maska = document.getElementById("maska");
const masaz = document.getElementById("masaz");
const makijaz = document.getElementById("makijaz");


const output = document.getElementById("output");

function calculatePrice() {
    let sum = 0;

    if (peeling.checked) {
        sum += 45;
    } if (maska.checked) {
        sum += 30;
    } if (masaz.checked) {
        sum += 20;
    } if (makijaz.checked) {
        sum += 50;
    }

    output.innerHTML = `Cena zabiegów: ${sum}`;
}