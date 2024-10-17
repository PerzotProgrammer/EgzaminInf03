const fname = document.getElementById("fname");
const sname = document.getElementById("sname");
const email = document.getElementById("email");
const details = document.getElementById("details");
const confirm = document.getElementById("confirm");
const output = document.getElementById("output");

function send() {
    if (!confirm.checked) {
        output.innerHTML = "<span style='color:red;'>Musisz zapoznać się z regulaminem</span>";
        return;
    }

    output.innerHTML = `${fname.value.toUpperCase()} ${sname.value.toUpperCase()}<br>Treść twojej sprawy: ${details.value}`;
}

function reset() {
    sname.value = "";
    fname.value = "";
    email.value = "";
    details.value = "";
    confirm.checked = false;
    output.innerHTML = "";
}