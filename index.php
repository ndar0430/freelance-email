
 <?php
 
 require_once('functions.php');

 ?>

 <html xmlns="https://www.w3.org/1999/xhtml" lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Log into Magento Admin Page</title>
    <link type="text/css" rel="stylesheet" href="public/css/reset.css" media="all">
    <link type="text/css" rel="stylesheet" href="public/css/boxes.css" media="all">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="public/js/prototype.js"></script>
    <script type="text/javascript" src="public/js/validation.js"></script>
    <script type="text/javascript" src="public/js/effects.js"></script>
    <script type="text/javascript" src="public/js/form.js"></script>
    <script type="text/javascript" src="public/js/captcha.js"></script>
 
    <!--[if IE]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/iestyles.css" type="text/css" media="all" /> <![endif]-->
    <!--[if lt IE 7]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/below_ie7.css" type="text/css" media="all" /> <![endif]-->
    <!--[if IE 7]> <link rel="stylesheet" href="https://livedemo00.template-help.com/magento_47328/skin/adminhtml/default/default/ie7.css" type="text/css" media="all" /> <![endif]-->
</head>
<body id="page-login">
    <div class="login-container">
        <div class="login-box">
            <form method="POST" action="#" id="loginForm" autocomplete="off">
                <div class="login-form">
                    <input name="form_key" type="hidden" value="3OzWMhicsDbZagt3">
                    <h2>Log in to Admin Panel</h2>
                    <div id="messages">
                                            </div>
                    <div class="input-box input-left"><label for="username">User Name:</label><br>
                        <input type="text" id="username" name="username" value="" class="required-entry input-text"></div>
                    <div class="input-box input-right"><label for="login">Password:</label><br>
                        <!-- This is a dummy hidden field to trick firefox from auto filling the password -->
             
                        <input type="password" id="password" name="password" class="required-entry input-text" value=""></div>
                                        <div class="clear"></div>
                    <div class="form-buttons">
                        <a class="left" href="forgot_password.php">Forgot your password?</a>
                        <input type="submit" class="form-button" value="Login" title="Login"></div>
                </div>
                <p class="legal">Magento is a trademark of Magento Inc. Copyright © 2018 Magento Inc.</p>
            </form>
            <div class="bottom"></div>
        </div>
    </div>
 
</body><!-- Google Tag Manager --></html>