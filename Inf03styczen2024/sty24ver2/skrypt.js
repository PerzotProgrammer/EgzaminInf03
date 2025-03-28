const fName = document.getElementById("fName");
const sName = document.getElementById("sName");
const email = document.getElementById("email");
const report = document.getElementById("report");
const output = document.getElementById("output");

function sendForm() {
    let message = `${fName.value} ${sName.value}<br>${email.value.toLowerCase()}<br>Usługa: ${report.value}`;
    output.innerHTML = message;
}

function clearForm() {
    fName.value = "";
    sName.value = "";
    email.value = "";
}