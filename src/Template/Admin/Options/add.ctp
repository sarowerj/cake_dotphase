<?php

/**
  * @var \App\View\AppView $this
  */

$optionTemplates = [
    'inputContainer' => '<div class="form-group">{{content}}<span class="help">{{help2}}</span></div>',
];
$this->Form->setTemplates($optionTemplates);

$name = array(
    'type'=>'text',
    'placeholder'=>'Name',
    'id'=>'name',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form',
    'label' => [
        'text' => 'Name', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$email = array(
    'type'=>'email',
    'placeholder'=>'Email',
    'id'=>'email',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form',
    'label' => [
        'text' => 'Email', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$email2 = array(
    'type'=>'email',
    'placeholder'=>'Email2',
    'id'=>'email',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form',
    'label' => [
        'text' => 'Email2', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$phone = array(
    'type'=>'number',
    'placeholder'=>'Phone',
    'id'=>'phone',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form',
    'label' => [
        'text' => 'Phone', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$phone2 = array(
    'type'=>'number',
    'placeholder'=>'phone2',
    'id'=>'phone2',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form',
    'label' => [
        'text' => 'Phone2', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$address = array(
    'type'=>'textarea',
    'placeholder'=>'Address',
    'id'=>'address',
    'rows'=>'3',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form textarea',
    'label' => [
        'text' => 'Address', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
$address2 = array(
    'type'=>'textarea',
    'placeholder'=>'Address',
    'id'=>'address2',
    'rows'=>'3',
    'class'=>'col-md-9 col-sm-9 col-xs-12 cake-form textarea',
    'label' => [
        'text' => 'Address', 
        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
    ]
);
?>

<main>
    <div class="page-title">
        <div class="title_left">
            <h3>Site Options<small>Site's all little info is here.</small></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-content">
        <div class="row">
            <div class="col-md-6">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Contact Info</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                         <?= $this->Form->create($option,['class'=>'form-horizontal form-label-left']) ?>
                        <?= $this->Form->input('name', $name).
                                $this->Form->input('email', $email).
                                $this->Form->input('email2', $email2).
                                $this->Form->input('phone', $phone).
                                $this->Form->input('phone2', $phone2).
                                $this->Form->input('address', $address).
                                $this->Form->input('address2', $address2);
                        ?>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <?= 
                                    $this->Form->reset('reset',['class'=>'btn btn-primary']).
                                    $this->Form->button('submit',['class'=>'btn btn-success','div'=>'false']);
                                ?>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Social Info</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="facebookName" placeholder="/facebookName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="twitterName" placeholder="/twitterName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Skype</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="skypeName" placeholder="/skypeName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Google Plus</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="googlePlusName" placeholder="/googlePlusName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Linked In</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="linkedInName" placeholder="/linkedInName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="instagramName" placeholder="/instagramName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Youtube</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="youtubeName" placeholder="/youtubeName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Flickr</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="flickrName" placeholder="/flickrName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pinterest</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" name="pinterestName" placeholder="/pinterestName">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="options form large-9 medium-8 columns content">
    <?= $this->Form->create($option) ?>
    <fieldset>
        <legend><?= __('Add Option') ?></legend>
        <?php
            echo $this->Form->control('option_name');
            echo $this->Form->control('option_value');
            echo $this->Form->control('created_by');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
