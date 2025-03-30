const blocks = [
    document.getElementById("block1").style,
    document.getElementById("block2").style,
    document.getElementById("block3").style
];
let progress = 4;
const progressBarStyle = document.getElementById("progressBar").style;

const dataInputs = [
    document.getElementById("fName"),
    document.getElementById("sName"),
    document.getElementById("birthDate"),
    document.getElementById("street"),
    document.getElementById("homeNumber"),
    document.getElementById("city"),
    document.getElementById("phoneNumber"),
    document.getElementById("rodoCheckbox")
];


function showBlock(blockNum) {
    for (let i = 0; i < blocks.length; i++) {
        if (i == blockNum) blocks[i].display = "block";
        else blocks[i].display = "none";
    }
}

function makeProgress() {
    if (progress < 100) {
        progress += 12;
        progressBarStyle.width = `${progress}%`;
    }
}

function onAccept() {
    let strBuilder = "";
    dataInputs.forEach(elem => {
        strBuilder += `${elem.value}, `;
    });

    console.log(strBuilder);
}