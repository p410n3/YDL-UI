<?php
include "php/verification.php";
verifyLogin();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YDL-UI</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="content">
    <h2>YDL-UI</h2>

    <div class="form">
        <form action="ydl.php" method="post">
            <div style="display: inline-flex">
                <input type="text" class="form-control url" name="url" placeholder="URL">
                <input type="submit" class="btn btn-primary dl-btn" value="Download" id="dlBtn">
            </div>

            <select name="fileFormat" class="form-control">
                <option value="mp3">MP3</option>
                <option value="video">Video</option>
            </select>
        </form>
    </div>

    <a href="https://rg3.github.io/youtube-dl/supportedsites.html">Supported Sites to Download from</a>
    <a href="https://github.com/p410n3/YDL-UI">This project on Github</a>

    <div class="sk-circle hidden" id="loading">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<script src="js/script.js"></script>
</body>

</html>
