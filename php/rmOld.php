<?php
//Deletes all old Directorys older than $hours in the config
function rmOldDir($hours) {
    if ($handle = opendir('./')) {
        while (false !== ($dir = readdir($handle))) {
            if ('.' === $dir) continue;
            if ('..' === $dir) continue;

            if (in_array($dir, $whiteListedFolders)) continue;

            if (is_dir($dir)) {
                if ($hours != 0 && ((time() - filemtime($dir)) > ($hours * (60 * 60)))) {
                    rrmdir($dir);
                }
            }
        }
        closedir($handle);
    }
}
