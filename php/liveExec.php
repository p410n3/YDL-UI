<?php
//executes the commmand that it was given and live outouts it to the FE
function liveExec($cmd) {
    while (@ ob_end_flush());

    $proc = popen($cmd, 'r');
    while (!feof($proc))
    {
        echo "<p>";
        echo fread($proc, 4096);
        echo "</p>";
        @ flush();
    }
    pclose($proc);
}