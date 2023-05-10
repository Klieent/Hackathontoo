<?php


// Define the array
$array = array(
    'role' => 'assistant',
    'content' => 'Product, skin, great, didn\'t, worked, would, recommend, sensitive, high, hopes, unfortunately, live, expectations, solid, nothing, special, job, done, love, helped.'
);

// Split the content string into an array of words
$words = explode(', ', $array['content']);

// Loop through each word and output it on a new line
foreach ($words as $word) {
    echo $word . "<br>";
}
