<?php include('taylor_api.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <meta charset="UTF-8">
    <title>Taylor Swift Quote Generator</title>
    <script type="text/javascript" src="../js/emojis.js"></script>
</head>

<body>
    <header>
    <div class="container">
        <h1 class="logo"> Taylor Swift Quote Generator </h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="quotes.php">Quotes</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <form method='post' action="#">
        <input type='submit' name='submit' value='Generate' onclick='submit' class='submit'>
    </form>
    <div class="center">
        <div class="quote">
            <?php
                $quote_image = get_random_quote("0");
                $quote = $quote_image[0];
                $image = $quote_image[1];
                $song = $quote_image[2];
                echo "<p class=quote>$quote</p>";
                echo "<img src='../images/$image.jpg' alt='$image' id=album>";
                echo "<form method='post' action='#'>";
                    echo "<input type='button' name='submit' id'emoji' value='Show/Hide Emoji Conversion' onclick='revealEmojis();'>";
                echo "</form>";
                echo "<p class=song>$song</p>";
                echo "<p id=emoji style='display:none;'>hello</p>";
            ?>
        </div>
    </div>
    <footer>
        <div class="center">
            <p> &copy; 2023 Taylor Swift Quote Generator </p>
            <p> Created by Insiya Mullamitha</p>
        </div>
    </footer>
</body>
</html>