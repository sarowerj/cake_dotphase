<?php
/**
 * @var \App\View\AppView $this
 */
$file = array(
    'type' => 'file'
);
?>
<main>
    <div class="page-title">
        <div class="title_left">
            <h3>Create new page <small>Create new page for your website</small></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="medias form large-9 medium-8 columns content">
        <div class="upload_area">
            <?= $this->Form->create($media, ['enctype' => 'multipart/form-data', 'url' => '/admin/medias/upload_media']) ?>
            <input type="file" id="brows_file" name="media"/>
            <h3>
                Drop your file here <br /><br />
                <span class="btn btn-success">Select File</span>
            </h3>
            <?= $this->Form->end() ?>
        </div>
        <div class="media_gallery">
            <?php foreach ($medias as $media): ?>
                <a href="view/<?= $media->id ?>">
                    <div class="item">
                        <!--span class="checking">
                            <span class="glyphicon glyphicon-ok"></span>
                        </span-->
                        <div class="image_cont">
                            <div class="table-row">
                                <div class="table-cell">
                                    <img src="<?php echo $this->request->webroot . "uploads/" . h($media->new_name); ?>" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div> 
    </div> 
</main>


<script type="text/javascript">
    $(document).ready(function () {
//        $('.media_gallery .item').click(function () {
//            $(this).toggleClass('checked');
//        });


        $('#brows_file').change(function () {
            var file_data = $(this).prop("files")[0];
            var form_data = new FormData();
            form_data.append("file", file_data)
            $('.upload_area').addClass('uploading');
            $.ajax({
                url: 'upload_media',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $('.upload_area').removeClass('uploading');
                    if (data == 'error') {
                        alert('File Type not Allow.');
                    } else {
                        console.log(data);
                    }
                }
            });
        });
    })
</script>