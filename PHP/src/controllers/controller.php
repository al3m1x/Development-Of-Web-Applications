<?php
    function rower_html() {
        return 'rower_html';
    }
    function dart_html() {
        return 'dart_html';
    }
    function esport_html() {
        return 'e-sport_html';
    }
    function football_html() {
        return 'football_html';
    }
    function form_html() {
        return 'form_html';
    }
    function index_html() {
        return 'index_html';
    }
    function gallery_html(&$model) {
        $model['type'] = 'none';
        $model['size'] = 'none';
        $model['ifwatermark'] = 'none';
        $model['iftitle'] = 'none';
        $model['ifauthor'] = 'none';
        $model['valid'] = 'none';

        return 'gallery_html';
    }

    function gallery_html_action(&$model) {
        include_once '../business/watermark.php';
        include_once '../business/business.php';
$target_direction="images/images_normal/";
$target_file = $target_direction . basename($_FILES["plik"]["name"]);
$model['target_file']=$target_file;
$file=basename($_FILES["plik"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$file_w = "images/images_normal/" . $file;
 if(isset($_POST["submit"])) {
    $fileSize = $_FILES['plik']['size'];
  if($imageFileType != "jpg" && $imageFileType != "png") {
    $model['type'] = 'false';
    }
    else {
        $model['type'] = 'true';
      }
    
    if ($fileSize > 1024 * 1024) {
        $model['size'] = 'false';
      }
      else {
        $model['size'] = 'true';
      }
      if ($_SERVER["REQUEST_METHOD"]=="POST") {
      $watermark = $_POST['watermark'];
      if (empty($watermark)) {
        $model['ifwatermark'] = 'false';
      }
      else {
        $model['ifwatermark'] = 'true';
      }
      $title = $_POST['title'];
      if (empty($title)) {
        $model['iftitle'] = 'false';
      }
      else {
        $model['iftitle'] = 'true';
      }
      $author = $_POST['author'];
      if (empty($author)) {
        $model['ifauthor'] = 'false';
      }
      else {
        $model['ifauthor'] = 'true';
      }
      $model['watermark']=$watermark;
    }
    if ($model['size'] === 'true'&&$model['type']==='true'&&$model['ifwatermark']==='true'&&$model['iftitle']==='true'&&$model['ifauthor']==='true') {
      move_uploaded_file($_FILES["plik"]["tmp_name"], $target_file);
      $model['valid']='true';
      get_data();
      generate_watermark($file_w, $target_file, $imageFileType, $watermark);
    }
    else {
      $model['valid'] = 'false';
    }
    return 'gallery_html';
}
}
function galleryshow_html(&$model) {
  include_once '../business/business.php';
  $dir = "images/images_mini/";
              if(is_dir($dir)) {
                  $number = count(glob($dir . "*"));
                  $model['number']=$number;
              }
 $sites=0;
  for ($i=0;$i<$number;$i=$i+5) {
  $sites=$sites+1;
 }   
 $model['sites']=$sites;

 if (empty($_GET['page'])) {
  $page=1;
}
else {
$page=$_GET['page']; 
}

$value=($page*5)-5;
$img1=1+$value; $img2=2+$value; $img3=3+$value; $img4=4+$value; $img5=5+$value;

$model['title1']=search_title($img1);
$model['title2']=search_title($img2);
$model['title3']=search_title($img3);
$model['title4']=search_title($img4);
$model['title5']=search_title($img5);

$model['author1']=search_author($img1);
$model['author2']=search_author($img2);
$model['author3']=search_author($img3);
$model['author4']=search_author($img4);
$model['author5']=search_author($img5);

if(!empty($_SESSION['fav'])) {
foreach($_SESSION['fav'] as $favs) {
if($favs=='img' . $img1) {
    $checked1='checked';
    break;
} else $checked1=' ';
}
foreach($_SESSION['fav'] as $favs) {
    if($favs=='img' . $img2) {
        $checked2='checked';
        break;
    } else $checked2=' ';
    }
    foreach($_SESSION['fav'] as $favs) {
        if($favs=='img' . $img3) {
            $checked3='checked';
            break;
        } else $checked3=' ';
        }
        foreach($_SESSION['fav'] as $favs) {
            if($favs=='img' . $img4) {
                $checked4='checked';
                break;
            } else $checked4=' ';
            }
            foreach($_SESSION['fav'] as $favs) {
                if($favs=='img' . $img5) {
                    $checked5='checked';
                    break;
                } else $checked5=' ';
                }
            }
            else {$checked1=' ';$checked2=' ';$checked3=' ';$checked4=' ';$checked5=' ';}
  $model['checked1']=$checked1;
  $model['checked2']=$checked2;
  $model['checked3']=$checked3;
  $model['checked4']=$checked4;
  $model['checked5']=$checked5;
 return 'galleryshow_html';
}

function login(&$model) {
  $model['iflogin_l'] = 'none';
  $model['ifpassword_l'] = 'none';
  $model['valid'] = 'none';
  return 'login';
}
function register(&$model) {
  $model['ifemail'] = 'none';
  $model['iflogin'] = 'none';
  $model['ifpassword'] = 'none';
  $model['ifpassword_r'] = 'none';
  $model['valid_password'] = 'none';
  $model['valid']='none';
  return 'register';
}

function register_action(&$model) {
  include_once '../business/business.php';
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $login = $_POST['login'];
    if (empty($login)) {
      $model['iflogin'] = 'false';
    }
    else {
      $model['iflogin'] = 'true';
    }
    $email = $_POST['email'];
    if (empty($email)) {
      $model['ifemail'] = 'false';
    }
    else {
      $model['ifemail'] = 'true';
    }
    $password = $_POST['password'];
    if (empty($password)) {
      $model['ifpassword'] = 'false';
    }
    else {
      $model['ifpassword'] = 'true';
    }
    $password_r = $_POST['password_r'];
    if (empty($password_r)) {
      $model['ifpassword_r'] = 'false';
    }
    else {
      $model['ifpassword_r'] = 'true';
    }
    if ($password_r!=$password) {
      $model['valid_password'] = 'false';
    }
    else {
      $model['valid_password'] = 'true';
    }
  }
  $user = check_login($login);
  if($user!== null) {
    $model['iflogin'] = 'false';
  }
if ($model['ifemail'] == 'false'||$model['iflogin'] == 'false'||$model['ifpassword'] == 'false'||$model['ifpassword_r'] == 'false'||$model['valid_password'] == 'false') {
  $model['valid']='false';
  return 'register';
}
else {
  $hash=password_hash($password, PASSWORD_DEFAULT);
  save_passwords($email, $login, $hash);
  gallery_html($model);
  return 'redirect:gallery_html';
}
}

function login_action(&$model) {
  include_once '../business/business.php';
  $login = $_POST['login'];
    if (empty($login)) {
      $model['iflogin_l'] = 'false';
    }
    else {
      $model['iflogin_l'] = 'true';
    }
    $password = $_POST['password'];
    if (empty($password)) {
      $model['ifpassword_l'] = 'false';
    }
    else {
      $model['ifpassword_l'] = 'true';
    }
    $user=check_login($login);
    if ($model['iflogin_l'] == 'false'||$model['ifpassword_l'] == 'false'||$user == null||!password_verify($password, $user['password'])) {
      $model['valid'] = 'false';
      return 'login';
    }
    if ($user !== null&&password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['_id'];
      $_SESSION['logged'] = 1;
      gallery_html($model);
      return 'redirect:gallery_html';
    }
}

function logout() {
  include_once '../business/business.php';
  session_destroy();
  session_unset();
  return 'redirect:gallery_html';
}

function fav_action() {

    $fav=$_POST['fav'];
    if (!empty($_SESSION['fav'])) {
    $prev_fav=$_SESSION['fav'];
    $_SESSION['fav']=array_unique( array_merge($fav, $prev_fav) );
  }
  else {
    $_SESSION['fav']=$fav;
  }
  return 'redirect:gallery_html';
}
function favlist_html(&$model) {
  include_once '../business/business.php';
  if(!empty($_SESSION['fav'])) {
  foreach($_SESSION['fav'] as $imgs) {
    $imgs_r = str_replace('img', '', $imgs);
    $firstVarName='title' . $imgs_r;
    $secondVarName='author' . $imgs_r;
    $model[$firstVarName]=search_title($imgs_r); $model[$secondVarName]=search_author($imgs_r);
}
  }
  return 'favlist_html';
}

function fav_delete() {
$fav_del=$_POST['fav_del'];
$prev_fav=$_SESSION['fav'];
$_SESSION['fav']=array_diff($prev_fav, $fav_del);
return 'redirect:gallery_html';
}


?>