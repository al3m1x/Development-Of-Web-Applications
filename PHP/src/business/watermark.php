<?php
    function generate_watermark($file, $path, $format, $watermark) {
        if ($format==='jpg'){
            $format='jpeg';
        }
        $dir = "images/images_with_watermark/";
        if(is_dir($dir)) {
            $number = count(glob($dir . "*"))+1;
        }
        $path = "images/images_with_watermark/" . "img" . $number . "." . 'png';
        $command = "imagecreatefrom{$format}";
        $image = $command($file);
        if ($format==="png") {
        imagealphablending($image, false);
        $transparency = imagecolorallocatealpha($image, 0, 0, 0, 127);
        imagefill($image, 0, 0, $transparency);
        imagesavealpha($image, true);
        }
        $color = imagecolorallocate($image, 0x0, 0x0, 0x0);
        $x = 40;
        $y = imagesy($image) - 40;
        imagettftext($image, 35, 45, $x, $y, $color, '../web/static/Roboto-Medium.ttf', $watermark);
        imagepng($image, $path);
        imagedestroy($image);

        $file = $path;

        $dir = "images/images_mini/";
        if(is_dir($dir)) {
            $number = count(glob($dir . "*"))+1;
        }
        $path = "images/images_mini/" . "img" . $number . "." . "png";
        generate_mini($file, $path, $format);
    }

    function generate_mini($file, $path, $format) {
        $command = "imagecreatefrompng";
        $image = $command($file);
        $mini = imagescale($image, 200, 125);
        if ($format==="png") {
        imagealphablending($mini, false);
        $transparency = imagecolorallocatealpha($mini, 0, 0, 0, 127);
        imagefill($mini, 0, 0, $transparency);
        imagesavealpha($mini, true);
        }
        imagedestroy($image);
        imagepng($mini, $path);
    }
?>