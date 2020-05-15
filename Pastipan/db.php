<?php
//Start a session, we can save data in this session
session_start();

//Connected to DB
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'pastipan'
);

?>