function revealSong(){
    var song = document.getElementById("song");
    if (song.style.display === "none") {
        song.style.display = "block";
    } else {
        song.style.display = "none";
    }
}

function copyText() {
    quote = document.getElementById("quote")
    navigator.clipboard.writeText(quote.innerHTML)
}
