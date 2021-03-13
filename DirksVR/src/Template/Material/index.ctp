<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material[]|\Cake\Collection\CollectionInterface $material
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Material'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="material index large-9 medium-8 columns content">
    <h3><?= __('Material') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kennung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigAb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigBis') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($material as $material): ?>
            <tr>
                <td><?= $this->Number->format($material->id) ?></td>
                <td><?= h($material->name) ?></td>
                <td><?= h($material->kennung) ?></td>
                <td><?= h($material->gueltigAb) ?></td>
                <td><?= h($material->gueltigBis) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $material->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $material->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
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
