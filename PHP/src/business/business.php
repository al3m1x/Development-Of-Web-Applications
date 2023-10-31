<?php
require_once '../../vendor/autoload.php';
use MongoDB\BSON\ObjectID;
function get_db()
{
    $mongo = new MongoDB\Client(
        "mongodb://localhost:27017/wai",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
        ]);

    $db = $mongo->wai;

    return $db;
}

function get_data() {

    $dir = "images/images_mini/";
    if(is_dir($dir)) {
        $number = count(glob($dir . "*"));
    }
    $number++;
    $name='img' . $number;

    $author=$_POST['author'];
    $title=$_POST['title'];
    save_data($name, $author, $title);
}

function save_data($name, $author, $title) {
    $db=get_db();
    $image = [
        'name' => $name,
        'author' => $author,
        'title' => $title
    ];
    $db->images->insertOne($image);
}

function search_title($name) {
    $db = get_db();
    $results = $db->images->findOne(['name' => 'img' . $name]);
    $title = $results['title'];
    return $title;
}
function search_author($name) {
    $db = get_db();
    $results = $db->images->findOne(['name' => 'img' . $name]);
    $author = $results['author'];
    return $author;
}
function save_passwords($email, $login, $hash) {
  $db=get_db();
  $user = [
    'email'=> $email,
    'login' => $login,
    'password' => $hash
  ];
  $db->users->insertOne($user);
}
function check_login($login) {
    $db = get_db();
    $user=$db->users->findOne(['login'=>$login]);
    return $user;
}

?>