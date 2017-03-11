<?php
$status = array('','Published', 'Pending', 'Draft')
?>
<main>
    <div class="page-title">
        <div class="title_left">
            <h3>Pages <small>All pages are here.</small></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-content">
        <table class="table table-bordered table-striped">
            <thead>
                <tr> 
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('sub_title') ?></th> 
                    <th scope="col"><?= $this->Paginator->sort('created', 'Date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created_by', 'Author') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr> 
                        <td><?= $this->Html->link($post->title, ['action' => 'edit', $post->id]) ?></td>
                        <td><?= h($post->sub_title) ?></td> 
                        <td><?= h($post->created) ?></td>
                        <td><?= $this->Number->format($post->created_by) ?></td>
                        <td><?= $status[$this->Number->format($post->status)] ?></td>
                        <!--td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                        </td-->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <div class="row">
                <div class="col-xs-6">
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>
                <div class="col-xs-6">
                    <ul class="pagination x_pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

