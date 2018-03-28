<?php
function loopAndPrint() {
    //Loop through the created dir and list all files in there for download
    if ($handle = opendir("./")) {
        while (false !== ($file = readdir($handle))) {
            if ('.' === $file) continue;
            if ('..' === $file) continue;

            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<p class="card-text">' . $file . '</p>';
            echo '<a href="' . $_GET["folder"] . '/' . $file . '" class="btn btn-primary" download>Download</a>';
            echo '</div>';
            echo '</div>';
        }
        closedir($handle);
    }
}
