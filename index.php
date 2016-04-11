<?
//Start Session
session_start(); 

// Generate A Random String
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}

// Assign the Session With Random String

$_SESSION['code'] = generateRandomString();
$thcode = $_SESSION['code'];


// Convert String to Image and Grab it with CURL while it is Base64

$url = "image.php?t=$_SESSION[code]";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
$ret_val = curl_exec($curl);
$b64_image_data =  chunk_split(base64_encode($ret_val));
curl_close($curl);


// Show the Image

echo "<img id='codeId' src='data:image/jpg;base64,$b64_image_data'><br><br>

// Captcha Form 

<form name='captchaCheck' action='response.php' method='POST'>
<input name='code' type='text' required>
</form>

";


?>

