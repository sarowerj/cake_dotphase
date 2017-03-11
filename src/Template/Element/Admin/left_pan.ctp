<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/cake_dotphase/admin" class="site_title"><i class="fa fa-paw"></i> <span>Dotphase Inc</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <?php echo $this->Html->image('img.jpg', ['alt' => '', 'class' => 'img-circle profile_img']) ?>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="/cake_dotphase/admin"><i class="fa fa-home"></i> Home</a></li> 
                    <li><a><i class="fa fa-file-o"></i> Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link('New Page', ['controller' => 'Posts', 'action' => 'add']); ?></li>
                            <li><?= $this->Html->link('Published Pages', ['controller' => 'Posts', 'action' => 'index']); ?></li>
                            <li><?= $this->Html->link('Pending pages', ['controller' => 'Posts', 'action' => 'index']); ?></li>
                            <li><?= $this->Html->link('Draft pages', ['controller' => 'Posts', 'action' => 'index']); ?></li>
                            <li><?= $this->Html->link('All pages', ['controller' => 'Posts', 'action' => 'index']); ?></li>
                            <li><?= $this->Html->link('Trash', ['controller' => 'Posts', 'action' => 'index']); ?></li>
                        </ul>
                    </li> 
                    <li><a><i class="fa fa-file-o"></i> Media <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link('New Media', ['controller' => 'Medias', 'action' => 'add']); ?></li>
                            <li><?= $this->Html->link('All Medias', ['controller' => 'Medias', 'action' => 'index']); ?></li>
                        </ul>
                    </li> 
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div