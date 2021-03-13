<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verarbeitung[]|\Cake\Collection\CollectionInterface $verarbeitung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Verarbeitung'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verarbeitung index large-9 medium-8 columns content">
    <h3><?= __('Verarbeitung') ?></h3>
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
            <?php foreach ($verarbeitung as $verarbeitung): ?>
            <tr>
                <td><?= $this->Number->format($verarbeitung->id) ?></td>
                <td><?= h($verarbeitung->kennung) ?></td>
                <td><?= h($verarbeitung->gueltigAb) ?></td>
                <td><?= h($verarbeitung->gueltigBis) ?></td>
                <td><?= h($verarbeitung->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $verarbeitung->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $verarbeitung->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $verarbeitung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $verarbeitung->id)]) ?>
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
