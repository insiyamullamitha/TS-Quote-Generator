<?php

function get_random_song($album_id){
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
    while ($response[$random]['album_id'] != $album_id) {
        $random = rand(0, count($response) - 1);
    }
    $song_id = $response[$random]['song_id'];
    $title = $response[$random]['title'];
    $album_id = $response[$random]['album_id'];
    return [$song_id, $title, $album_id];
}

function get_random_quote($album_id){
    $album_id_name = array(
        "1" => "1989",
        "2" => "taylorswift",
        "3" => "fearless",
        "4" => "speaknow",
        "5" => "red",
        "6" => "reputation",
        "7" => "lover",
        "8" => "folklore",
        "9" => "evermore",
        "10" => "midnights");
    if ($album_id == "0") {
        $album_id = strval(rand(1, 10));
    }
    $album_id = $album_id_name[$album_id];
    $curl = curl_init();
    $lyric = "https://taylorswiftapi.onrender.com/get-all?album=$album_id";
    curl_setopt($curl, CURLOPT_URL, $lyric);
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
    while (isset($response[$random]['quote']) == false) {
        echo "calculating";
        $random = rand(0, count($response) - 1);
    }
    $quote = $response[$random]['quote'];
    $image = $album_id;
    return [$quote, $image];
}

?>