<?php

if ( count($argv) != 2 ) {
    print("Missing file name.\nUsage: find_brackets.php <filename>\n");
    return;
}

$data = file_get_contents($argv[1]);
if ( $data == false ) {
    print("Failed to open ${argv[1]}\n");
    return;
}

if(preg_match_all('/\[([^\]]+)\]/', $data, $matches)) {
    foreach ($matches[1] as $match) {
        print("$match\n");
    }
}

?>
