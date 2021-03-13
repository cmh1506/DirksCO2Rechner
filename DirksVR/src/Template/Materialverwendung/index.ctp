<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materialverwendung[]|\Cake\Collection\CollectionInterface $materialverwendung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Verpackung'), ['controller' => 'Verpackung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Verpackung'), ['controller' => 'Verpackung', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recyclingmethode'), ['controller' => 'Recyclingmethode', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recyclingmethode'), ['controller' => 'Recyclingmethode', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Verarbeitung'), ['controller' => 'Verarbeitung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Verarbeitung'), ['controller' => 'Verarbeitung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialverwendung index large-9 medium-8 columns content">
    <h3><?= __('Materialverwendung') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kennung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigAb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gueltigBis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('verpackung_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recyclingmethode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('verarbeitung_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menge') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flaeche') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recyclingquote') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materialverwendung as $materialverwendung): ?>
            <tr>
                <td><?= $this->Number->format($materialverwendung->id) ?></td>
                <td><?= h($materialverwendung->kennung) ?></td>
                <td><?= h($materialverwendung->gueltigAb) ?></td>
                <td><?= h($materialverwendung->gueltigBis) ?></td>
                <td><?= $materialverwendung->has('verpackung') ? $this->Html->link($materialverwendung->verpackung->name, ['controller' => 'Verpackung', 'action' => 'view', $materialverwendung->verpackung->id]) : '' ?></td>
                <td><?= $materialverwendung->has('material') ? $this->Html->link($materialverwendung->material->name, ['controller' => 'Material', 'action' => 'view', $materialverwendung->material->id]) : '' ?></td>
                <td><?= $materialverwendung->has('recyclingmethode') ? $this->Html->link($materialverwendung->recyclingmethode->name, ['controller' => 'Recyclingmethode', 'action' => 'view', $materialverwendung->recyclingmethode->id]) : '' ?></td>
                <td><?= $materialverwendung->has('verarbeitung') ? $this->Html->link($materialverwendung->verarbeitung->name, ['controller' => 'Verarbeitung', 'action' => 'view', $materialverwendung->verarbeitung->id]) : '' ?></td>
                <td><?= $this->Number->format($materialverwendung->menge) ?></td>
                <td><?= $this->Number->format($materialverwendung->flaeche) ?></td>
                <td><?= $this->Number->format($materialverwendung->recyclingquote) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materialverwendung->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialverwendung->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialverwendung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialverwendung->id)]) ?>
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
