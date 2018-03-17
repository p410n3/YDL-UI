<?php
include "php/verification.php";
verifyLogin();

//Include files here
include 'php/foldersize.php';
include 'php/rrmdir.php';
include 'php/rmOld.php';
include 'php/liveExec.php';
include 'config.php';

if (isset($_POST['url'])) {

    $whiteListedFolders = array(
        ".",
        "..",
        "css",
        "php",
    );

    //Deletes all old Directories older than $hours in the config
    if ($handle = opendir('./')) {
        while (false !== ($dir = readdir($handle))) {
            //These folders will not be deleted when space is freed. IMPORTANT!
            if (in_array($dir, $whiteListedFolders)) continue;
            if (is_dir($dir)) {
                if ($hours != 0 && ((time() - filemtime($dir)) > ($hours * (60 * 60)))) {
                    rrmdir($dir);
                }
            }
        }
        closedir($handle);
    }


    //Make an folder with md5(date()) to download the stuff there
    $md5_date = md5(date("Y-m-d H:i:s"));
    mkdir($md5_date);
    chdir($md5_date);

    //Check what fileFormat the user chose
    if (isset($_POST['fileFormat'])) {
        if ($_POST['fileFormat'] == "mp3") {
            $fileFormat = ' --extract-audio --audio-format mp3 -f "bestaudio"';
        }

        if ($_POST['fileFormat'] == "video") {
            $fileFormat = "";
        }
    }

    //Prepare the command
    $cmd = "youtube-dl " . escapeshellarg($_POST['url']) . $fileFormat . $additionalParams;    //fileFormat does not need to be escaped, its no user input
}
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
    <h2>Downloading...</h2>
    <br />
    <div class="popen">
        <?php
            liveExec($cmd);

            //writes the log
            $logFileName = "log.php";
            chdir("../");
            $data = $_SESSION['user'] . " initiated download for: " . $_POST["url"] .
                " at " . date("d-m-Y h:i:sa") . " as " . $_POST["fileFormat"] .
                ". File size: " . (folderSize($md5_date) / 1000000) . "mb";

            $log = file_put_contents($logFileName, $data.PHP_EOL , FILE_APPEND | LOCK_EX);

            echo '<script>window.location = "dl.php?folder=' . $md5_date . '"</script>';
            echo '<a href="dl.php?folder=' . $md5_date . '">DOWNLOAD HERE</a>';
        ?>
    </div>
</body>

</html>