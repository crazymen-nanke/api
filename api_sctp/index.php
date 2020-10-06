<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
<?php
header('Content-type:text/json');
include "config.php";
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp        = explode(".", $_FILES["file"]["name"]);
$ip          = getIp();
$time        = getTime();
$extension   = end($temp); // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 5242880) // 小于 5M
     && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {

        $data = array(
            'success' => 'false',
            'message' => 'Upload fail',
            'time'    => $time,
            'ip'      => $ip,
            'website' => 'https://zl.crazymen.cn',
        );
        $data_json = json_encode($data);
        echo $data_json;
    } else {
        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            $url  = $website . $dir . '/upload/' . $_FILES["file"]["name"];
            $data = array(
                'success' => 'true',
                'message' => 'file exists',
                'time'    => $time,
                'ip'      => $ip,
                'url'     => $url,
                'website' => 'https://zl.crazymen.cn',
            );
            $data_json = json_encode($data);
            echo $data_json;
        } else {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            $url  = $website .$dir . '/upload/' . $_FILES["file"]["name"];
            $data = array(
                'success' => 'true',
                'message' => 'Upload success',
                'time'    => $time,
                'ip'      => $ip,
                'url'     => $url,
                'website' => 'https://zl.crazymen.cn',
            );
            $data_json = json_encode($data);
            echo $data_json;
            $insert = mysqli_query($conn, "insert into images(time,ip,url) values('$time','$ip','$url')");
        }
    }
} else {

    $data = array(
        'success' => 'false',
        'ip'      => $ip,
        'time'    => $time,
        'message' => 'Failed to upload the image file.please contact the author',
        'website' => 'https://zl.crazymen.cn',
        'qq'      => '2395353168',
    );
    $data_json = json_encode($data);
    echo $data_json;
}

function getIp()
{
    //strcasecmp 比较两个字符，不区分大小写。返回0，>0，<0。
    if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
        $ip = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
        $ip = getenv('REMOTE_ADDR');
    } else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $res = preg_match('/[\d\.]{7,15}/', $ip, $matches) ? $matches[0] : '';
    return $res;
}

function getTime()
{
    $date = new DateTime();
    return $date->format('Y-m-d H:i:s');
}
