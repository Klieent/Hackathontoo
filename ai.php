<?php

$curl = curl_init();

$question = $_POST['question'];


curl_setopt_array($curl, [
    CURLOPT_URL => "https://chatgpt-api6.p.rapidapi.com/standard-gpt",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'conversation' => [
            [
                'role' => 'user',
                'content' => $question
            ]
        ]
    ]),
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: chatgpt-api6.p.rapidapi.com",
        "X-RapidAPI-Key: 4e138e87e5mshd49bee5272bd02cp16914cjsncdced4f8a75d",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$ans = json_decode($response, true);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    print_r($ans['answer']['content']);
}
