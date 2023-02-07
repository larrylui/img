<?php
// 定义图片 URL 数组
$images = array("https://i.328888.xyz/2023/02/06/rBVkZ.png");

// 随机获取图片 URL
$selectedImage = $images[array_rand($images)];

// 下载图片
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename="random-image.jpg"');
readfile($selectedImage);
?>
