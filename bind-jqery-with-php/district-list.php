<?php
if (isset($_POST['id'])) {
    $divisionId = $_POST['id'];

    
    $districts = [
        "1" => ["Gazipur", "Narayanganj", "Tangail"],
        "2" => ["Chandpur", "Brahmanbaria", "Feni"],
        "3" => ["Patuakhali", "Bhola", "Jhalokati"],
        "4" => ["Laxmipur", "Maijdee", "Subarnachar"]
    ];

    if (array_key_exists($divisionId, $districts)) {
        foreach ($districts[$divisionId] as $d) {
            echo "<p>$d</p>";
        }
    } else {
        echo "No districts found.";
    }
}
?>