<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.pinterest.com/ideas/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set User-Agent to mimic a real browser
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
]);

$html = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo "cURL error: " . curl_error($ch);
}

curl_close($ch);

// echo $html;
$doc = new DOMDocument();
@$doc->loadHTML($html);

$images = $doc->getElementsByTagName('img');
foreach ($images as $img) {
    echo "Image: " . $img->getAttribute('src') . "\n";
}

