<?php
echo '<br><br><br><br>';
echo '<form action="fav_action" method="post">';
if ($number>=$img1) {
echo '<div class="imageshow"><a href="images/images_with_watermark/img' . $img1 . '.png" target="_blank"><img src=images/images_mini/' . 'img' . $img1 . '.png></a>';
echo 'Title: ' . $title1 . ' '; echo 'Author: ' . $author1 ; echo '<br>'; 
echo   '<input type="checkbox" id="fav" name="fav[]" value="img' . $img1 . '"' . $checked1 . '>'; echo '<label for="fav"> Add to favourite</label></div><br>';
}
if ($number>=$img2) {
echo '<div class="imageshow"><a href="images/images_with_watermark/img' . $img2 . '.png" target="_blank"><img src=images/images_mini/' . 'img' . $img2 . '.png></a>';
echo 'Title: '. $title2 . ' '; echo 'Author: '. $author2; echo '<br>';
echo   '<input type="checkbox" id="fav" name="fav[]" value="img' . $img2 . '"' . $checked2 . '>'; echo '<label for="fav"> Add to favourite</label></div><br>';
} 
if ($number>=$img3) {
echo '<div class="imageshow"><a href="images/images_with_watermark/img' . $img3 . '.png" target="_blank"><img src=images/images_mini/' . 'img' . $img3 . '.png></a>';
echo 'Title: '. $title3 . ' '; echo 'Author: '. $author3; echo '<br>';
echo   '<input type="checkbox" id="fav" name="fav[]" value="img' . $img3 . '"' . $checked3 . '>'; echo '<label for="fav"> Add to favourite</label></div><br>';
}
if ($number>=$img4) {
echo '<div class="imageshow"><a href="images/images_with_watermark/img' . $img4 . '.png" target="_blank"><img src=images/images_mini/' . 'img' . $img4 . '.png></a>';
echo 'Title: '.$title4 . ' '; echo 'Author: '.$author4; echo '<br>';
echo   '<input type="checkbox" id="fav" name="fav[]" value="img' . $img4 . '"' . $checked4 . '>'; echo '<label for="fav"> Add to favourite</label></div><br>';
}
if ($number>=$img5) {
echo '<div class="imageshow"><a href="images/images_with_watermark/img' . $img5 . '.png" target="_blank"><img src=images/images_mini/' . 'img' . $img5 . '.png></a>';
echo 'Title: '.$title5 . ' '; echo 'Author: '.$author5; echo '<br>';
echo   '<input type="checkbox" id="fav" name="fav[]" value="img' . $img5 . '"' . $checked5 . '>'; echo '<label for="fav"> Add to favourite</label></div><br>';
}
if($number>=$img1) {
    echo '<button class="imageshow" type="submit">Zapamiętaj wybrane</button>'; }
echo '</form>';
?>