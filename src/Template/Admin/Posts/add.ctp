<?php
/**
 * @var \App\View\AppView $this
 */
$template = array('inputContainer' => '<div class="form-group">{{content}}</div>');
$title = array(
    'type' => 'text',
    'class' => 'form-control input-lg',
    'id' => 'title',
    'placeholder' => 'Title',
    'required' => 'required',
    'label' => false,
    'templates' => $template
);
$sub_title = array(
    'type' => 'text',
    'class' => 'form-control',
    'id' => 'sub_title',
    'placeholder' => 'Sub Title',
    'required' => 'required',
    'label' => false,
    'templates' => $template
);
$content = array(
    'type' => 'textarea',
    'class' => 'form-control',
    'id' => 'content',
    'placeholder' => 'Content',
    'rows' => 25,
    'required' => 'required',
    'label' => false,
    'templates' => $template
);
$excerpt = array(
    'type' => 'textarea',
    'class' => 'form-control',
    'id' => 'excerpt',
    'placeholder' => 'Excerpt',
    'rows' => 5,
    'required' => 'required',
    'label' => false,
    'templates' => $template
);
$status = array(
    'type' => 'select',
    'class' => 'form-control',
    'id' => 'status',
    'required' => 'required',
    'label' => false,
    'options' => array(
        '1' => 'Published',
        '2' => 'Pending',
        '3' => 'Draft'),
    'templates' => $template
);
$media = array(
    'type' => 'hidden',
    'class' => 'form-control',
    'id' => 'media',
    'value' => 'media',
    'required' => 'required',
    'templates' => $template
);
$type = array(
    'type' => 'hidden',
    'value'=>'page',
    'class' => 'form-control',
    'id' => 'type',
    'required' => 'required',
    'templates' => $template
);
$created_by = array(
    'type' => 'hidden',
    'class' => 'form-control',
    'id' => 'created_by',
    'required' => 'required',
    'value' => 1,
    'templates' => $template
);
$updated_by = array(
    'type' => 'hidden',
    'class' => 'form-control',
    'id' => 'updated_by',
    'required' => 'required',
    'value' => 1,
    'templates' => $template
);
$button = array(
    'class' => 'btn btn-primary',
    'id' => 'save_btn',
);
?>
<main>
    <div class="page-title">
        <div class="title_left">
            <h3>Create new page <small>Create new page for your website</small></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-content">
        <?= $this->Form->create($post) ?>
        <div class="row">
            <div class="col-md-9">
                <?= $this->Form->control('title', $title); ?>
                <?= $this->Form->control('sub_title', $sub_title); ?>
                <?= $this->Form->control('content', $content); ?>
                <?= $this->Form->control('excerpt', $excerpt); ?>
            </div>
            <div class="col-md-3">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Publish</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p><?= $this->Form->control('status', $status); ?></p>
                        <div class="x_footer">
                            <?php
                            echo $this->Html->link('Discard', ['controller' => 'Posts', 'action' => 'index'], ['class' => 'btn btn-transparent danger pull-left'])
                            ?>
                            <?= $this->Form->button(__('Publish'), $button) ?>
                        </div>
                    </div>
                </div>

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Attachments</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="#media_modal" class="btn btn-primary btn-block" data-toggle="modal" data-target="#media_modal">Select your media</a>
                        <?= $this->Form->control('media', $media); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo $this->Form->control('type', $type);
        echo $this->Form->control('created_by', $created_by);
        echo $this->Form->control('updated_by', $updated_by);
        ?>

        <?= $this->Form->end() ?>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="media_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg x_modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Select your attachment</h4>
            </div>
            <div class="modal-body">
                <div class="media_gallery">
                    <?php for ($i = 0; $i < 30; $i++) {
                        ?>
                        <div class="item">
                            <span class="checking">
                                <span class="glyphicon glyphicon-ok"></span>
                            </span>
                            <div class="image_cont">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <?php
                                        echo $this->Html->image("img.jpg", [
                                            "alt" => "Brownies"
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <h3>Title</h3>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?= $this->Html->script('/plugins/ckeditor/ckeditor'); ?>

<script>
    CKEDITOR.replace('content');
    CKEDITOR.config.height = 350;
    CKEDITOR.config.toolbar = [
        ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'Find', 'Replace', '-', 'Outdent', 'Indent', '-', 'Print'],
        '/',
        ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
        ['Image', 'Table', '-', 'Link', 'Flash', 'Smiley', 'TextColor', 'BGColor', 'Source']
    ];
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.media_gallery .item').click(function () {
            $(this).toggleClass('checked');
        });
    })
</script>
