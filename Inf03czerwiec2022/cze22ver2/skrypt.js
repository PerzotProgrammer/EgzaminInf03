function CalculatePrice() {
    let fuelType = document.getElementById("fuelType").value;
    let fuelAmount = document.getElementById("fuelAmount").value;
    let price = 0;
    if (fuelType == "1") {
        price = fuelAmount * 4;
    }
    else if (fuelType == "2") {
        price = fuelAmount * 3.5;
    }
    document.getElementById("price").innerHTML = "koszt paliwa: " + price + "zł";
}