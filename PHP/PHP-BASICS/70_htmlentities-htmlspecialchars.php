<?php

// $str = "A 'quote' is <b>bold</b>";
// $str = "<a href='https://www.youtube.com/watch?v=D8L7l1qAgd4&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=76'>Yahoo Baba Website</a>";


// echo $str . "<br><br>";

// echo htmlentities($str, ENT_QUOTES);
// echo htmlentities($str, ENT_NOQUOTES);
// echo htmlspecialchars($str, ENT_QUOTES);

// $htmlent =  htmlspecialchars($str, ENT_QUOTES);

// echo $htmlent . "<br>";

// echo htmlspecialchars_decode($htmlent);


echo "<pre>";

print_r(get_html_translation_table(HTML_ENTITIES));


?>