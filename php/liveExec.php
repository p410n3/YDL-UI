<?php
//executes the command that it was given and live outputs it to the FE
function liveExec($cmd) {
    @ ob_end_flush();

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