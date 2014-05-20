<?php
header('Content-Type: text/html; charset=utf-8');

function connect_sql() {
    $con = new mysqli("127.0.0.1", "titaniov_joker", "saikuron", "titaniov_cyclonejoker");
    if ($con->connect_error) die($con->connect_error);
    $con->character_set_name = "utf8";
    
    return $con;
}

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>