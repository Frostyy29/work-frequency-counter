<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $sortOrder = $_POST['sort']; 
    $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 10; 
 
    $text = strtolower(preg_replace("/[^\w\s]/", "", $text));

     $words = explode(" ", $text);
    
     
     $wordFrequency = array_count_values($words);
     
    
     if ($sortOrder == 'asc') {
        asort($wordFrequency); 
    } else {
        arsort($wordFrequency); 
    }
    
    $wordFrequency = array_slice($wordFrequency, 0, $limit, true);
    
    
    echo "<h1>Word Frequency Result</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Word</th><th>Frequency</th></tr>";
    
    foreach ($wordFrequency as $word => $count) {
        if (!empty($word)) {
            echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . $count . "</td></tr>";
        }
    }
    
    echo "</table>";

    
}
?>
