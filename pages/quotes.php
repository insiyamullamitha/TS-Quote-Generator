<?php include('taylor_api.php')?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <meta charset="UTF-8">
    <title>Taylor Swift Quote Generator</title>
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
    <label> Select an album: </label>
    <form action="quotes.php" method="post">
        <select name="album">
            <option value="2">Taylor Swift</option>
            <option value="3">Fearless (Taylor's Version)</option>
            <option value="4">Speak Now (Taylor's Version)</option>
            <option value="5">Red (Taylor's Version)</option>
            <option value="1">1989 (Taylor's Version)</option>
            <option value="6">reputation</option>
            <option value="7">Lover</option>
            <option value="8">folklore</option>
            <option value="9">evermore</option>
            <option value="10">Midnights</option>
            <option value="0">Random</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php
        #var_dump($_POST);
        if (isset($_POST['album'])) {
            $album_id = $_POST['album'];
        }
        else {
            $album_id = rand(1, 10);
        }
        $response = get_random_quote($album_id);
        echo $response;

    ?>
    <footer>
        <div class="center">
            <p> &copy; 2023 Taylor Swift Quote Generator </p>
            <p> Created by Insiya Mullamitha</p>
        </div>
    </footer>
</body>
</html>