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
    </div>
    <div class="album">
    <label name="album">Choose a Taylor Swift Album</label>
        <select id="album">
            <option value="Taylor Swift">Taylor Swift</option>
            <option value="Fearless">Fearless</option>
            <option value="Speak Now">Speak Now</option>
            <option value="Red">Red</option>
            <option value="1989">1989</option>
            <option value="Reputation">Reputation</option>
            <option value="Lover">Lover</option>
            <option value="Folklore">Folklore</option>
            <option value="Evermore">Evermore</option>
            <option value="Midnights">Midnights</option>
            <option value="Random">Random</option>
        </select>
    </div>
    <footer>
        <div class="center">
            <p> &copy; 2023 Taylor Swift Quote Generator </p>
            <p> Created by Insiya Mullamitha</p>
        </div>
    </footer>
<?php

$curl = curl_init();

$song = "https://taylor-swift-api.sarbo.workers.dev/songs";

curl_setopt($curl, CURLOPT_URL, $song);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curl);
$error = curl_errno($curl);

curl_close($curl);

if ($error) {
    die("cURL Error: " . $error);
}

$response = json_decode($response, true);

$random = rand(0, count($response) - 1);
$id = $response[$random]['song_id'];
$title = $response[$random]['title'];
$album_id = $response[$random]['album_id'];
echo "ID: $id Title: $title Album: $album_id <br>";

foreach ($response as $song) {
    $song_id = $song['song_id'];
    $title = $song['title'];
    $album_id = $song['album_id'];
    echo "ID: $song_id Title: $title Album: $album_id<br>";
}


?>
</body>
</html>