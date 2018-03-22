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
            <div class="form-group">
                <select name="fileFormat" class="form-control">
                    <option value="mp3">MP3</option>
                    <option value="video">Video</option>
                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="zip" name="zip">
                <label class="form-check-label" for="zip">Download as .zip file?</label>
            </div>
            <a data-toggle="collapse" href="#expertDiv" role="button" aria-expanded="false" aria-controls="expertDiv">
                Enable expert Options
            </a>
            <div class="form-group collapse" id="expertDiv">
                <input type="text" class="form-control" id="expert" placeholder="Expert Options" name="expertParams">
            </div>
        </form>
    </div>

    <a href="https://rg3.github.io/youtube-dl/supportedsites.html">Supported Sites to Download from</a>
    <a href="https://github.com/p410n3/YDL-UI">This project on Github</a>
</div>

<!-- Latest compiled and minified JavaScript fo bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
