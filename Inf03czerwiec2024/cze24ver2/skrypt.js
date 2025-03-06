const chat = document.getElementById("chat");
const messageBox = document.getElementById("messageBox");

const responses = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety"
];


function sendMessage() {
    const message = messageBox.value;
    chat.innerHTML += `<section id="mess1" class="message"><img src="Jolka.jpg" alt="Jolka"><p>${message}</p></section>`;
    chat.scrollTop = chat.scrollHeight;
}

function rollMessage() {
    const randNum = Math.floor(Math.random() * 8);
    const message = responses[randNum];
    chat.innerHTML += ` <section id="mess2" class="message"><img src="Krzysiek.jpg" alt="Krzysiek"><p>${message}</p></section></section>`;
    chat.scrollTop = chat.scrollHeight;
}