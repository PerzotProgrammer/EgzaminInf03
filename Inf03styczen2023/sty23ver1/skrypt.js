const area = document.getElementById("area");
const output = document.getElementById("output");

function calculatePrice() {
    const calculatedPrice = Math.ceil(area.value / 4);
    output.innerHTML = `Liczba potrzebnych puszek: - ${calculatedPrice}`;
}