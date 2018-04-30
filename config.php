<?php
//The default password is "password"
$authArray = array(
    "user1"=>"5f4dcc3b5aa765d61d8327deb882cf99",
    "user2"=>"5f4dcc3b5aa765d61d8327deb882cf99",
);

//Delete old folders after x hours
$hours = 0.5; // 0 to disable

//timezone
date_default_timezone_set('Europe/Berlin');

//ALWAYS adding these to the end of the youtube-dl command, for user input arguments use the expert options
$additionalParams = " --no-warnings --embed-thumbnail --add-metadata";

//This will stream the shell output to the Frontend. If problems occur set to false
$liveExec = false;