<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title><?= config()['TITLE'] ?></title>
    <link type="text/css" rel="stylesheet" href="Assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/animate.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/pages.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/common.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/responsive.css">
</head>

<body class="login-page">
    <section class="login-container">
        <div class="container">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="login-form-container">
                    <form action="index.php?action=login/connexion" method="POST" class="j-forms" id="forms-login">
                        <div class="login-form-header">
                            <div class="logo">
                                <a href="index.php"><img src="Assets/images/logos/logo-removebg.png" class="img-fluid" height="100" height="100" alt="logo"></a>
                            </div>
                        </div>
                        <div class="login-form-content">
                            <?php
                            if (isset($msg)) { ?>
                                <div class="alert alert-danger">
                                    <p><?= $msg ?></p>
                                </div>
                            <?php } ?>
                            <div class="unit">
                                <div class="input login-input">
                                    <label class="icon-left" for="login">
                                        <p></p>
                                        <i class="fa fa-user"></i>
                                    </label>
                                    <input class="form-control login-frm-input" type="text" id="login" name="login" placeholder="Username" value="<?= isset($login) ? $login : "" ?>">
                                </div>
                            </div>
                            <div class="unit">
                                <div class="input login-input">
                                    <label class="icon-left" for="password">
                                        <p class=""></p>
                                        <i class="fa fa-key"></i>
                                    </label>
                                    <input class="form-control login-frm-input" type="password" id="password" name="password" placeholder="Mot de passe">
                                    <span class="hint">
                                        <a href="#" class="link">Mot de passe oublie ?</a>
                                    </span>
                                </div>
                            </div>
                            <div class="unit">
                                <label class="checkbox">
                                    <input type="checkbox" name="logged" value="true" checked="">
                                    <i></i>
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        <div class="login-form-footer">
                            <button type="submit" class="btn-block btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Footer Start Here -->
        <footer class="login-page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                        <div class="footer-content">
                            <span class="footer-meta">Designed&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<?= config()['AUTHOR'] ?> </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End Here -->
    </section>
    <!--Page Container End Here-->
    <script src="Assets/js/lib/jquery.js"></script>
    <script src="Assets/js/lib/jquery-migrate.js"></script>
    <script src="Assets/js/lib/bootstrap.js"></script>
    <script src="Assets/js/lib/jRespond.js"></script>
    <script src="Assets/js/lib/hammerjs.js"></script>
    <script src="Assets/js/lib/jquery.hammer.js"></script>
    <script src="Assets/js/lib/smoothscroll.js"></script>
    <script src="Assets/js/lib/smart-resize.js"></script>

    <script src="Assets/js/lib/jquery.validate.js"></script>
    <script src="Assets/js/lib/jquery.form.js"></script>
    <script src="Assets/js/lib/j-forms.js"></script>
    <script src="Assets/js/lib/login-validation.js"></script>
</body>

</html>