

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="content">
    <h2>Generate Password Hash</h2>
    <div class="row passform">
        <form action="<?php $_SERVER["SCRIPT_FILENAME"] ?>" method="post">
            <input type="password" class="form-control" name="pass" placeholder="password">
            <input type="submit" class="btn btn-primary dl-btn" value="Generate Hash">
        </form>
    </div>

    <?php
        if (isset($_POST['pass'])) {
            echo password_hash($_POST['pass'], PASSWORD_DEFAULT);
        }
    ?>
</div>


</body>
</html>
