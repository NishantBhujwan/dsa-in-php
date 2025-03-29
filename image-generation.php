<?php
// Set image dimensions
$width = 400;
$height = 200;

// Create a blank image
$image = imagecreatetruecolor($width, $height);

// Set colors
$bgColor = imagecolorallocate($image, 255, 255, 255); // White
$textColor = imagecolorallocate($image, 0, 0, 0); // Black

// Fill background
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

// Set font path (Change this to an actual font path)
$fontPath = __DIR__ . '/arial.ttf'; 

if (!file_exists($fontPath)) {
    die("Font file not found: $fontPath");
}

// Add text to image
imagettftext($image, 20, 0, 50, 100, $textColor, $fontPath, "Hello PHP!");

// Save image
imagepng($image, "output.png");
imagedestroy($image);

echo "Image created successfully!";
