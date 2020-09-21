<?php
    include 'database2.php';
    header('Content-Type: application/json');
    echo json_encode($database);
