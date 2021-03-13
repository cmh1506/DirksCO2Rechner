<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materialverwendung $materialverwendung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materialverwendung'), ['action' => 'edit', $materialverwendung->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materialverwendung'), ['action' => 'delete', $materialverwendung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialverwendung->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Verpackung'), ['controller' => 'Verpackung', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Verpackung'), ['controller' => 'Verpackung', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recyclingmethode'), ['controller' => 'Recyclingmethode', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recyclingmethode'), ['controller' => 'Recyclingmethode', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Verarbeitung'), ['controller' => 'Verarbeitung', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Verarbeitung'), ['controller' => 'Verarbeitung', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materialverwendung view large-9 medium-8 columns content">
    <h3><?= h($materialverwendung->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kennung') ?></th>
            <td><?= h($materialverwendung->kennung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verpackung') ?></th>
            <td><?= $materialverwendung->has('verpackung') ? $this->Html->link($materialverwendung->verpackung->name, ['controller' => 'Verpackung', 'action' => 'view', $materialverwendung->verpackung->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $materialverwendung->has('material') ? $this->Html->link($materialverwendung->material->name, ['controller' => 'Material', 'action' => 'view', $materialverwendung->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recyclingmethode') ?></th>
            <td><?= $materialverwendung->has('recyclingmethode') ? $this->Html->link($materialverwendung->recyclingmethode->name, ['controller' => 'Recyclingmethode', 'action' => 'view', $materialverwendung->recyclingmethode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verarbeitung') ?></th>
            <td><?= $materialverwendung->has('verarbeitung') ? $this->Html->link($materialverwendung->verarbeitung->name, ['controller' => 'Verarbeitung', 'action' => 'view', $materialverwendung->verarbeitung->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materialverwendung->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menge') ?></th>
            <td><?= $this->Number->format($materialverwendung->menge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flaeche') ?></th>
            <td><?= $this->Number->format($materialverwendung->flaeche) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recyclingquote') ?></th>
            <td><?= $this->Number->format($materialverwendung->recyclingquote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GueltigAb') ?></th>
            <td><?= h($materialverwendung->gueltigAb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GueltigBis') ?></th>
            <td><?= h($materialverwendung->gueltigBis) ?></td>
        </tr>
    </table>
</div>
