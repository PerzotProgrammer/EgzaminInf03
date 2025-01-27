const form1Style = document.getElementById("f1").style;
const form2Style = document.getElementById("f2").style;
const form3Style = document.getElementById("f3").style;

function setDefaultStateOfForms() {
    form1Style.visibility = "visible";
    form2Style.visibility = "hidden";
    form3Style.visibility = "hidden";
}

function validateForm1() {
    form1Style.visibility = "hidden";
    form2Style.visibility = "visible";
}

function validateForm2() {
    form2Style.visibility = "hidden";
    form3Style.visibility = "visible";
}

function validateForm3() {
    const passwd1 = document.getElementById("passwd1").value;
    const passwd2 = document.getElementById("passwd2").value;

    if (passwd1 != passwd2) {
        alert("Podane hasła różnią się");
        return;
    }

    const fName = document.getElementById("fName").value;
    const sName = document.getElementById("sName").value;

    console.log(`Witaj ${fName} ${sName}`)
}