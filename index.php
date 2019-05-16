<?php
require_once "php/bd.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Безопасное общение. Анонимный мессенджер</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Безопасное общение. Анонимный мессенджер. Пользователи могут поделиться сообщением, файлом и знать будут только они.Никаких телефонов, E-mail и т.д. Данные удаляются каждый день.">
    <meta name="keywords"
          content="бесплатное сообщение, отправить, отправить сообщение, анонимное общение, анонимное сообщение, анонимно, общение, безопасно, мессенджер, получить, общение онлайн">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="/img/logo.png" alt="logotip" height="70" width="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a id="Mhead1" class="nav-link">Главная</a>
            </li>
            <li class="nav-item">
                <a id="Mhead2" class="nav-link">Обратная связь</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div id="head1">
        <div class="row">
            <div class="col-3">
                <form method="post" id="formx">
                    <div class="form-froup">
                        <input class="form-control" placeholder="Имя"
                               onkeypress="return check(event);"
                               type="text" name="nikN" id="nikI"
                               maxlength="7" minlength="2">
                    </div>
                    <div class="form-froup">
                        <input
                                onkeypress="return check(event);"
                                required class="form-control"
                                placeholder="Код" type="password"
                                name="passN" id="passI" minlength="5"
                                maxlength="9">
                    </div>
                    <div class="form-froup">

                        <textarea  type="text" class="form-control"
                               placeholder="Сообщение" name="textN" id="textI"
                               minlength="2" maxlength="254" wrap="soft"></textarea>
                    </div>
                    <input type="submit" id="subI1" class="btn btn-primary" name="messN1" value="Отправить">
                </form>
            </div>
            <br>
            <div id="resmess" class="col-9 receive"></div>

            <div class="col-4">
                <br><br>
                <div class="ya-share2"
                     data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,skype,telegram"></div>
            </div>

        </div>
    </div>
    <div id="head2">
        <div class="row">
            <div class="col-4">


                <form id="formxM" method="post" accept-charset="utf-8">
                    <div class="form-froup">
                        <input id="theamI"
                               class="form-control"
                               placeholder="Тема"
                               type="text"
                               name="theamN"
                               maxlength="35"
                               minlength="5"
                               required>
                    </div>
                    <div class="form-froup">

                        <textarea class="form-control" name="MessN" id="MessI" rows="3"  required minlength="7"
                                  maxlength="162" placeholder="Сообщение"></textarea>

                    </div>
                    <input type="submit" class="btn btn-success btn-primary" name="mail"
                           value="Отправить">

                </form>
                <div id="resformM"></div>
            </div>

            <div class="col-7">

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>
<!--share -->
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<!--share -->
<script src="/js/event.js"></script>
<script src="/js/ajax.js"></script>
<script src="/js/indexpage.js"></script>
</body>
</html>