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

<div class="dl-page">
    <br />

    <?php
    include 'php/loopAndPrint.php';

    if (isset($_GET['folder'])) {

        //check if the folder is an md5 value, if not abort
        if (!preg_match('/^[a-f0-9]{32}$/', $_GET['folder'])) {
            die('Unexpected Input...');
        };

        if (file_exists($_GET['folder'])) {
            chdir($_GET['folder']);
        } else {
            die('Folder does not exist...');
        }

        //That shows the cards
        loopAndPrint();
    }

    ?>
</div>
</body>
</html>