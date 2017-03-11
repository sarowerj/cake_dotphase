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
            <h3><?= __('Medias') ?></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="medias form large-9 medium-8 columns content"> 
        <div class="media_gallery">
            <?php foreach ($medias as $media): ?>
                <a href="medias/view/<?= $media->id ?>">
                    <div class="item">
                        <span class="checking">
                            <span class="glyphicon glyphicon-ok"></span>
                        </span>
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
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
</main>