const quotesStyles = [
    document.getElementById("quote1").style,
    document.getElementById("quote2").style,
    document.getElementById("quote3").style
];


function showQuote(quoteNumber) {

    for (let i = 0; i < 3; i++) quotesStyles[i].display = "none";

    quotesStyles[quoteNumber].display = "block";
}