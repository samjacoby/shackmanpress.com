<?php
// Reads a file, indicated by fileRead, which primes  the function fileFeed() to return little newline delimited tokens from the target file. Could be easily improved to use any old demilter that is convenient.

//error_reporting(E_ALL);
$fileContents = array();
function fileFeed() {
    static $i = 0;
    global $fileContents;
    $fileContentsLength = count($fileContents);
    if($i < $fileContentsLength) {
        $i++;
        return $fileContents[$i - 1];
    } else {
        return false;
    }
}

function fileRead($fileName) {
    global $fileContents;
    $fp = openReadFile($fileName);
    $i = 0;
    while($txt = getFileSection($fp)) {
        $fileContents[$i] = $txt;
        $i++;
    }
}

function openReadFile($fileName) {
    // open file and so forth
    $fp = fopen($fileName,  "r");
    if(!$fp) {
        // clever uniform error handling
    } else {
        return $fp;
    }
}

// Read file indicated by $fp, in nice bite-size strings (php5, pass by ref.)
function getFileSection($fp) {
    return fgets($fp, 2048);
}
?>
