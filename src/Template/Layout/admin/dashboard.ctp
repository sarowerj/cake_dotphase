<?= $this->element('Admin/header'); ?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?= $this->element('Admin/left_pan'); ?>

            <!-- top navigation -->
            <?= $this->element('Admin/top_nav'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
            <!-- /page content -->

            <?= $this->element('Admin/footer'); ?>