<?php
$img_info = getimagesize('http://z5.static.ximgs.net/thumbs/750x750/1/101391/20141103/2014110310456602524289.jpg1');
print_r($img_info);
echo '------------------';
$img_size = get_headers('http://thumb.ximgs.net/101391/2014110310452434696392_750x750.jpg');
print_r($img_size);
//echo $img_size['Content-Length'];


