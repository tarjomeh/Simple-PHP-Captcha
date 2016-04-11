<?
session_start(); 

if (isset($_SESSION['code'])) {
$code = $_POST['code'];


if ($code == $_SESSION[code]) {

echo "Captcha Correct";


} else {

echo "Wrong Captcha";

}

?>
