<?php
session_start();

function generateCaptcha($length = 6)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = "";
    $charLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $charLength - 1)];
    }
    $_SESSION['captcha'] = $captcha;
    return $captcha;
}

$captchaCode = generateCaptcha(6);
?>

<html>
<body>
<h1>Program-13: Write a function in PHP to generate captcha code </h1>
Generate Captcha: <?php echo $captchaCode; ?>
</body>
</html>
