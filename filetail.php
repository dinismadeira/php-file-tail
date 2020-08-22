<?php
function fileLines($filename, $pattern = false) {
    $result = 0;
    if ($file = fopen($filename, "r")) {
        while (!feof($file)) {
            $line = fgets($file);
            if (!$pattern || preg_match($pattern, $line)) {
                ++$result;
            }
        }
        fclose($file);
    }
    return $result;
}

function fileTail($filename, $lines, $pattern = false) {
    $result = "";
    $n = 0;
    $skip = max(0, fileLines($filename, $pattern) - $lines);
    
    if ($file = fopen($filename, "r")) {
        while (!feof($file)) {
            $line = fgets($file);
            if ($pattern && !preg_match($pattern, $line)) continue;
            if (++$n > $skip) $result .= $line;
        }
        fclose($file);
    }
    return $result;
}