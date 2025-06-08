const radios = [
    document.getElementById("radio1"),
    document.getElementById("radio2"),
    document.getElementById("radio3"),
    document.getElementById("radio4")
];

const output = document.getElementById("output");

function calculateDiscount() {
    let elem;
    for(elem = 0; elem < 4; elem++) {
        if(radios[elem].checked) break;
    }

    output.innerHTML = "cena promocyjna: ";

    switch(elem) {
        case 0:
            output.innerHTML += "15";
            break;
        case 1:
            output.innerHTML += "20";
            break;
        case 2:
            output.innerHTML += "30";
            break;
        case 3:
            output.innerHTML += "40";
            break;
        default:
            output.innerHTML = "zaznacz opcję!";
            break;

    }
}