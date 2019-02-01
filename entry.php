<?php
require_once('SqlFormatter.php');

$input = fgets(STDIN);
while ($input) {
    $query .= $input;
    $input = fgets(STDIN);
}

echo SqlFormatter::format($query, false);
