<?php

$curl = curl_init();

// Read the CSV file into a string
$csvString = file_get_contents('reviews.csv');

// Replace the commas with a different separator (e.g. semicolon)
$csvString = str_replace(',', ',', $csvString);

// Replace the line breaks with a different line ending character (e.g. Windows-style \r\n)
$csvString = str_replace("\n", "<br>", $csvString);





curl_setopt_array($curl, [
    CURLOPT_URL => "https://chatgpt-open-ai-nlp.p.rapidapi.com/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'messages' => [

            [
                'role' => 'user',
                'content' => 'List the most used words in this content ' . $csvString
            ],


        ],
        'temperature' => '0.7'
    ]),
    CURLOPT_HTTPHEADER => [
        "Type: chatgpt4-chat",
        "X-RapidAPI-Host: chatgpt-open-ai-nlp.p.rapidapi.com",
        "X-RapidAPI-Key: 7a9091d6cbmsh21cfeaa9099a188p102e0fjsn7492a582df77",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$ans = json_decode($response, true);

print_r($ans);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
