<?php
function logMessage($type, $message) {
    $logFile = date('Y-m-d') . "_log.txt";

    $logMessage = "[" . date('Y-m-d H:i:s') . "][$type] - $message" . PHP_EOL;
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}