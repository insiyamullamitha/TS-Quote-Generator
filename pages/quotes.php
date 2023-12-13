<?php include __DIR__ . '/../api/taylor_api.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__ . '/../components/header.php'; ?>
    <script type="text/javascript" src="../js/emoji.js"></script>
</head>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <form method='post' action="#">
        <input type='submit' name='submit' value='Generate' onclick='submit' class='submit'>
    </form>
    <div class="center">
        <div class="quote">
            <?php
                $quote_image = get_random_quote();
                $quote = $quote_image[0];
                $image = $quote_image[1];
                $song = $quote_image[2];
                echo "<p class=quote>$quote</p>";
                echo "<img src='../images/$image.jpg' alt='$image' id=album>";
                echo "<form method='post' action='#'>";
                    echo "<input type='button' name='submit' id'emoji' value='Show/Hide Emoji Conversion' class='submit' onclick='revealEmojis();'>";
                echo "</form>";
                echo "<p class=song>$song</p>";
                echo "<p style='display:none;' id='emoji'>hello</p>";
            ?>
        </div>
    </div>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>
</html>