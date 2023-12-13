function revealEmojis(){
    var emoji = document.getElementById("emoji");
    if (emoji.style.display === "none") {
        emoji.style.display = "block";
    } else {
        emoji.style.display = "none";
    }
}

function generateEmojis(){

}

function copyText() {
    quote = document.getElementById("quote")
    navigator.clipboard.writeText(quote.innerHTML)
}
