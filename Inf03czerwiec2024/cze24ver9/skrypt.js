const imgCenter = document.getElementById("photoCenter");
let currentIndex = 1;

function switchImage(makeIncrement) {
    if (makeIncrement) currentIndex++;
    else currentIndex--;
    if (currentIndex == 0) currentIndex = 7;
    else if (currentIndex == 8) currentIndex = 1;
    imgCenter.src = `${currentIndex}.jpg`;
}