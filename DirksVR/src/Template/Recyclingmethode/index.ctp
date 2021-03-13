<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recyclingmethode[]|\Cake\Collection\CollectionInterface $recyclingmethode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recyclingmethode'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recyclingmethode index large-9 medium-8 columns content">
    <h3><?= __('Recyclingmethode') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kennung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigAb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigBis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recyclingmethode as $recyclingmethode): ?>
            <tr>
                <td><?= $this->Number->format($recyclingmethode->id) ?></td>
                <td><?= h($recyclingmethode->kennung) ?></td>
                <td><?= h($recyclingmethode->gueltigAb) ?></td>
                <td><?= h($recyclingmethode->gueltigBis) ?></td>
                <td><?= h($recyclingmethode->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recyclingmethode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recyclingmethode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recyclingmethode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recyclingmethode->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
</div>
