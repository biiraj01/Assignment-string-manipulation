<?php

$spell = "   ABRACADABRA   ";

$trimmed = trim($spell);
$lower = strtolower($trimmed);

if ($lower == "abracadabra") {
    echo "Spell is correct";
} 
else {
    echo "Wizarding world is still at risk!";
}
?>
