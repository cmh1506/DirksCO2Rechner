<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verpackung[]|\Cake\Collection\CollectionInterface $verpackung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Verpackung'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verpackung index large-9 medium-8 columns content">
    <h3><?= __('Verpackung') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kennung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigAb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigBis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($verpackung as $verpackung): ?>
            <tr>
                <td><?= $this->Number->format($verpackung->id) ?></td>
                <td><?= h($verpackung->kennung) ?></td>
                <td><?= h($verpackung->gueltigAb) ?></td>
                <td><?= h($verpackung->gueltigBis) ?></td>
                <td><?= $verpackung->has('user') ? $this->Html->link($verpackung->user->id, ['controller' => 'Users', 'action' => 'view', $verpackung->user->id]) : '' ?></td>
                <td><?= h($verpackung->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $verpackung->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $verpackung->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $verpackung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $verpackung->id)]) ?>
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
