<?php declare(strict_types=1);

function pp(string $msg, bool $return = false) {
    $preffix = date('Y-m-d H:i:m ');
    $msg = $preffix . $msg;
    if ($return) {
        return $msg;
    } else {
        echo $msg;
    }
}
