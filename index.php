<?php
// 定义图片 URL 数组
$images = array("https://example.com/image1.jpg",
                "https://example.com/image2.jpg",
                "https://example.com/image3.jpg",
                "https://example.com/image4.jpg");

// 随机获取图片 URL
$selectedImage = $images[array_rand($images)];

// 下载图片
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename="random-image.jpg"');
readfile($selectedImage);
?>
