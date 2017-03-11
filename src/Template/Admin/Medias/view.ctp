<?php
/**
 * @var \App\View\AppView $this
 */
$status = array('', 'Published', 'Suspended')
?>
<main>
    <div class="page-title">
        <div class="title_left">
            <h3><?=h($media->name)?> <small><?=h($media->type)?></small></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-content">
        <div class="row"> 
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Basic Details <small>Basic information about media.</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Label</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Media Old Name</td>
                                    <td><?= h($media->name) ?></td>
                                </tr>
                                <tr>
                                    <td>Media New Name</td>
                                    <td><?= h($media->new_name) ?></td>
                                </tr>
                                <tr>
                                    <td>Media type</td>
                                    <td><?= h($media->type) ?></td>
                                </tr>
                                <tr>
                                    <td>Media Size</td>
                                    <td><?= h($media->size) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Core Details <small>Core details about media.</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Label</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Source Directory</td>
                                    <td><?= h($media->directory) ?></td>
                                </tr>
                                <tr>
                                    <td>Media Uploaded</td>
                                    <td><?= h($media->created) ?></td>
                                </tr>
                                <tr>
                                    <td>Media Modified</td>
                                    <td><?= h($media->modified) ?></td>
                                </tr>
                                <tr>
                                    <td>Media Status</td>
                                    <td><?= $status[h($media->status)]?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="image_container">
                    <img src="<?php echo $this->request->webroot . "uploads/" . h($media->new_name); ?>" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
    </div>
</main>

