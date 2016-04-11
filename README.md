# Simple-PHP-Captcha
In order to create a Simple PHP Captcha, we will need to create a Session in the main page where our captcha is going to appear. In the second step, we need to set a session variable with a Random String. The random string should be converted to image using imagettftext() and then it is called with cURL in base64 and it is added to the page. The captcha checking form sends the user input to a response page where it is checked against the session variable.

##index.php
Session starts here. A random string is generated and set as the session variable. The random string is sent to the image.php and the resulted image is shown on the page with base64. The user is expected to enter the image characters in the form.

##image.php
This page creates an image from our random string. You need to upload a font like "arial.ttf" in your root dir or any other folder.

##response.php
This page checks the user input against the session variable. If the user entered the correct string, the form submission will work.
