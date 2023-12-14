<?php include __DIR__ . '/../api/taylor_api.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include __DIR__ . '/../components/header.php'; ?>
        <script type="text/javascript" src="../js/script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body class='body-for-sticky'>
        <?php include __DIR__ . '/../components/navbar.php'; ?>
        <form method='post' action="#">
            <div class="buttonContainer">
                <input type='submit' name='submit' value='Generate' onclick='submit' class='submit'>
                <button type='button' class=copyButton onclick='copyText()'><i class='fas fa-copy'></i> Copy To Clipboard</button>
            </div>
        </form>
        <div class="center">
            <div class="quote">
                <?php
                    $quote_image = get_random_quote();
                    $quote = $quote_image[0];
                    $image = $quote_image[1];
                    $song = $quote_image[2];
                    echo "<p class=quote id=quote>$quote</p>";
                    echo "<img src='../images/$image.jpg' alt='$image' id=album>";
                    echo "<form method='post' action='#'>";
                    echo "<input type='button' name='submit' id'emoji' value='Reveal/Hide Song' class='submit' onclick='revealSong();'>";
                    echo "</form>";
                    echo "<p id=song style='display:none;' class=song>$song</p>";
                ?>
            </div>
        </div>
    </body>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</html>