<?php

$conn = pg_connect("host=dpg-d60lqccr85hc7397h08g-a 
dbname=testdb_2bq6 
user=armenion 
password=d3gK0fljNZaEyKkk7PerytN32qSkIn6A");

if( !$conn){
    die("Cannot Link Start.");
}

$input = $_POST['input'];


echo ($input);
?>