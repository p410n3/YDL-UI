<?php
include "php/verification.php";
verifyLogin();

//Include files here
include 'php/foldersize.php';
include 'php/rrmdir.php';
include 'php/liveExec.php';
include 'config.php';

if (isset($_POST['url'])) {

    $whiteListedFolders = array(
        ".",
        "..",
        "css",
        "php",
        "js",
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
            $fileFormat = '--extract-audio --audio-format mp3 -f "bestaudio"';
        }

        if ($_POST['fileFormat'] == "video") {
            $fileFormat = "";
        }
    }

    $expertOptions = "";
    if (isset($_POST['expertParams'])) {
        $expertOptions = $_POST['expertParams'];
    }

    //Prepare the command
    try {
        $cmd = "LANG=C.UTF-8 youtube-dl" . " " .
            escapeshellcmd ($_POST['url']) . " " .
            $fileFormat . " " .
            escapeshellcmd($additionalParams) . " " .
            escapeshellcmd ($expertOptions);

        exec($cmd);

    } catch (Exception $e) {
        $cmd = "LANG=C.UTF-8 youtube-dl" . " " .
            escapeshellcmd ($_POST['url']) . " " .
            $fileFormat . " " .
            escapeshellcmd($additionalParams);

        exec($cmd);
    }

    //liveExec($cmd); //Inconsistent across PHP versions / webserver, switching to exec until I find a fix

    //writes the log
    $logFileName = "log.php";
    chdir("../");
    $data = $_SESSION['user'] . " initiated download for: " . $_POST["url"] .
        " at " . date("d-m-Y h:i:sa") . " as " . $_POST["fileFormat"] .
        ". File size: " . (folderSize($md5_date) / 1000000) . "mb";

    $log = file_put_contents($logFileName, $data . PHP_EOL, FILE_APPEND | LOCK_EX);
    
    header('Location: ./dl.php?folder=' . $md5_date);
}
