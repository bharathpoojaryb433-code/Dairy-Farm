<?php

function readJSON($file) {

    if (!file_exists(DATA_PATH . $file)) {
        return [];
    }

    $data = file_get_contents(DATA_PATH . $file);

    return json_decode($data, true) ?? [];
}

function writeJSON($file, $data) {

    file_put_contents(
        DATA_PATH . $file,
        json_encode($data, JSON_PRETTY_PRINT)
    );
}
?>