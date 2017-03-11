<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <!-- Bootstrap -->
        <?= $this->Html->css('/plugins/bootstrap/dist/css/bootstrap.min'); ?>
        <!-- Font Awesome -->
        <?= $this->Html->css('/plugins/font-awesome/css/font-awesome.min'); ?>
        <!-- NProgress -->
        <?= $this->Html->css('/plugins/nprogress/nprogress'); ?>
        <!-- Animate.css -->
        <?= $this->Html->css('/plugins/animate.css/animate.min'); ?>

        <!-- Custom Theme Style -->
        <?= $this->Html->css('/plugins/build/css/custom.min'); ?>
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </body>
</html>
