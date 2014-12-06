<?php 

$start = microtime(TRUE); 

main(); 

 

function main($img = 'http://static.s15.ximgs.net/thumbs/750x750/2/53412/20141130/2014113016443671923801.jpg') 

{ 

 

 

list($width, $height, $mime_code) = getimagesize($img); 

 

$im = null; 

$point = array(); 

switch ($mime_code) 

{ 

# jpg 

case 2: 

$im =imagecreatefromjpeg($img); 

break; 

 

# png 

case 3: 

 

default: 

exit('擦 ，什么图像？解析不了啊'); 

} 

 

$new_width = 100; 

$new_height = 100; 

$pixel = imagecreatetruecolor($new_width, $new_height); 

imagecopyresampled($pixel, $im, 0, 0, 0, 0, $new_width, $new_height, $width, $height); 

 

run_time(); 

 

$i = $new_width; 

while ($i–) 

{ 

# reset高度 

$k = $new_height; 

while ($k–) 

{ 

$rgb = ImageColorAt($im, $i, $k); 

array_push($point, array(‘r’=>($rgb >> 16) & 0xFF, ‘g’=>($rgb >> 8) & 0xFF, ‘b’=>$rgb & 0xFF)); 

} 

} 

imagedestroy($im); 

imagedestroy($pixel); 

 

run_time(); 

 

$color = kmeans($point); 

 

run_time(); 

 

foreach ($color as $key => $value) 
{ 

echo '<br><span style="background-color:' . RGBToHex($value[0]) . '" >' . RGBToHex($value[0]) . '</span>'; 

} 

 

} 

 

function run_time() 

{ 

global $start; 

//echo '<br/>消耗:' . (microtime(TRUE) – $start);

} 

 

function kmeans($point=array(), $k=3, $min_diff=1) 

{ 

global $ii; 

$point_len = count($point); 

$clusters = array(); 

$cache = array(); 

 

 

for ($i=0; $i < 256; $i++) 

{ 

$cache[$i] = $i*$i; 

} 

 

# 随机生成k值 

$i = $k; 

$index = 0; 

while ($i–) 

{ 

$index = mt_rand(1,$point_len-100); 

array_push($clusters, array($point[$index], array($point[$index]))); 

} 

 

 

run_time(); 

$point_list = array(); 

 

$run_num = 0; 

 

while (TRUE) 

{ 

foreach ($point as $value) 

{ 

$smallest_distance = 10000000; 

 

# 求出距离最小的点 

# index用于保存point最靠近的k值 

$index = 0; 

$i = $k; 

while ($i–) 

{ 

$distance = 0; 

foreach ($value as $key => $p1) 

{ 

if ($p1 > $clusters[$i][0][$key]) 

{ 

$distance += $cache[$p1 - $clusters[$i][0][$key]]; 

} 

else 

{ 

$distance += $cache[$clusters[$i][0][$key] – $p1]; 

} 

} 

 

$ii++; 

 

if ($distance < $smallest_distance) 

{ 

$smallest_distance = $distance; 

$index = $i; 

} 

} 

$point_list[$index][] = $value; 

} 

 

$diff = 0; 

# 1个1个迭代k值 

$i = $k; 

while ($i–) 

{ 

$old = $clusters[$i]; 

 

# 移到到队列中心 

$center = calculateCenter($point_list[$i], 3); 

# 形成新的k值集合队列 

$new_cluster = array($center, $point_list[$i]); 

$clusters[$i] = $new_cluster; 

 

# 计算新的k值与队列所在点的位置 

$diff = euclidean($old[0], $center); 

} 

 

# 判断是否已足够聚合 

if ($diff < $min_diff) 

{ 

break; 
>

} 

 

} 

echo ‘—>’.$ii; 

 

return $clusters; 

} 

 

# 计算2点距离 

$ii = 0; 

function euclidean($p1, $p2) 

{ 

 

$s = 0; 

foreach ($p1 as $key => $value) 

{ 

 

$temp = ($value – $p2[$key]); 

$s += $temp*$temp; 

} 

 

return sqrt($s); 

 

} 

 

# 移动k值到所有点的中心 

function calculateCenter($point_list, $attr_num) { 

$vals = array(); 

$point_num = 0; 

 

$keys = array_keys($point_list[0]); 

foreach($keys as $value) 

{ 

$vals[$value] = 0; 

} 

 

foreach ($point_list as $arr) 

{ 

$point_num++; 

foreach ($arr as $key => $value) 

{ 

$vals[$key] += $value; 

} 

} 

 

 

foreach ($keys as $index) 

{ 

$vals[$index] = $vals[$index] / $point_num; 

} 

 

return $vals; 

} 

 

 

 

function RGBToHex($r, $g=”, $b=”) 

{ 

if (is_array($r)) 

{ 

$b = $r['b']; 

$g = $r['g']; 


$r = $r['r']; 

} 

 

$hex = “#”; 

$hex.= str_pad(dechex($r), 2, ’0′, STR_PAD_LEFT); 

$hex.= str_pad(dechex($g), 2, ’0′, STR_PAD_LEFT); 

$hex.= str_pad(dechex($b), 2, ’0′, STR_PAD_LEFT); 

 

return $hex; 

} 

?> 