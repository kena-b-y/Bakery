<?php

$conn= new mysqli("localhost","Betty","makenaimunya@2CMB","registration");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

