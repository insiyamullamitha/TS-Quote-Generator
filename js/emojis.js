function revealEmojis(){
    console.log("hello")
    var emoji = document.getElementById("emoji");
    if (emoji.style.display === "none") {
        emoji.style.display = "block";
    } else {
        emoji.style.display = "none";
    }
}