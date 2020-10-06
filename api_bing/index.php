<?php
$counter       = intval(file_get_contents("counter.dat"));
$_SESSION['#'] = true;
$counter++;
$fp = fopen("counter.dat", "w");
fwrite($fp, $counter);
fclose($fp);
?>
<?php
$str    = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$array  = json_decode($str);
$imgurl = $array->{"images"}[0]->{"url"};
$imgurl = 'http://cn.bing.com' . $imgurl;
if ($imgurl) {
    header('Content-Type: image/JPEG');
    @ob_end_clean();
    @readfile($imgurl);
    @flush();@ob_flush();
    exit();
} else {
    exit('error');
}
