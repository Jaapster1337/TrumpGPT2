<?php


$contents = json_decode(file_get_contents("trumpdump.txt"), true);
foreach ($contents as $item) {
    file_put_contents('trumpdump_format.txt', $item['text'] . PHP_EOL . '<|endoftext|>' . PHP_EOL, FILE_APPEND);
}
