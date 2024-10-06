<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text']; // Get the input text
    $sortOrder = $_POST['sort']; // Get sort option (asc or desc)
    $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 10; // Get limit, default 10
    
    
}
?>
