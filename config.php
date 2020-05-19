<?php
//The default password is "password"
$authArray = array(
    'user1'=>'$2y$10$.8WJ5CCa41X.vM6bbtWP8OtqT1NMkbs5n1EgIj86R2SYha9xx79rm',
    'user2'=>'$2y$10$.8WJ5CCa41X.vM6bbtWP8OtqT1NMkbs5n1EgIj86R2SYha9xx79rm',
);

//Delete old folders after x hours
$hours = 0.5; // 0 to disable

//timezone
date_default_timezone_set('Europe/Berlin');

//ALWAYS adding these to the end of the youtube-dl command, for user input arguments use the expert options
$additionalParams = " --no-warnings --embed-thumbnail --add-metadata --id";

//This will stream the shell output to the Frontend. If problems occur set to false
$liveExec = false;
