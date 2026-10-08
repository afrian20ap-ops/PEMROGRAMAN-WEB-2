<?php
function repeatText($text, $num = 10)
{
    echo "<ol>\n";

    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text</li>\n";
    }

    echo "</ol>";
}

repeatText("I'm the best", 15);
repeatText("You're the man");
?>