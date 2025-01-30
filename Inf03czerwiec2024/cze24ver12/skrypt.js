const radios = document.getElementsByName("radioBee");
const fruitsModifier = document.getElementById("fruitsModifier");
const turtleModifier = document.getElementById("turtleModifier");

const imgBeeStyle = document.getElementById("imgBee").style;
const imgOrangeStyle = document.getElementById("imgOrange").style;
const imgFruitsStyle = document.getElementById("imgFruits").style;
const imgTurtleStyle = document.getElementById("imgTurtle").style;


function modifyBee() {
    let modifier;
    radios.forEach(radio => {
        if (radio.checked) {
            modifier = radio.id;
        }
    });

    switch (modifier) {
        case "rBlur":
            imgBeeStyle.filter = "blur(5px)";
            break;
        case "rSepia":
            imgBeeStyle.filter = "sepia(100%)";
            break;
        case "rNegative":
            imgBeeStyle.filter = "invert(100%)";
            break;

    }
}

function modifyOrange(apply) {
    if (apply) imgOrangeStyle.filter = "grayscale(100%)";
    else imgOrangeStyle.filter = "none";
}

function modifyFruits() {
    imgFruitsStyle.filter = `opacity(${fruitsModifier.value}%)`;
}

function modifyTurtle() {
    imgTurtleStyle.filter = `brightness(${turtleModifier.value}%)`;
}