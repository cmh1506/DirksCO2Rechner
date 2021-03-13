<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verpackung $verpackung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Verpackung'), ['action' => 'edit', $verpackung->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Verpackung'), ['action' => 'delete', $verpackung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $verpackung->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Verpackung'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Verpackung'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="verpackung view large-9 medium-8 columns content">
    <h3><?= h($verpackung->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kennung') ?></th>
            <td><?= h($verpackung->kennung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $verpackung->has('user') ? $this->Html->link($verpackung->user->id, ['controller' => 'Users', 'action' => 'view', $verpackung->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($verpackung->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($verpackung->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GueltigAb') ?></th>
            <td><?= h($verpackung->gueltigAb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GueltigBis') ?></th>
            <td><?= h($verpackung->gueltigBis) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Bemerkung') ?></h4>
        <?= $this->Text->autoParagraph(h($verpackung->bemerkung)); ?>
    </div>
    <div class="related">
        <h4><?= __('Eingabe für 1 Verpackungseinheit') ?></h4>
        <?php if (!empty($verpackung->materialverwendung)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kennung') ?></th>
                <th scope="col"><?= __('GueltigAb') ?></th>
                <th scope="col"><?= __('GueltigBis') ?></th>
                <th scope="col"><?= __('Verpackung Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Recyclingmethode Id') ?></th>
                <th scope="col"><?= __('Verarbeitung Id') ?></th>
                <th scope="col"><?= __('Menge') ?></th>
                <th scope="col"><?= __('Flaeche') ?></th>
                <th scope="col"><?= __('Recyclingquote') ?></th>
                <th scope="col">CO2</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($verpackung->materialverwendung as $materialverwendung): ?>
            <tr>
                <td><?= h($materialverwendung->id) ?></td>
                <td><?= h($materialverwendung->kennung) ?></td>
                <td><?= h($materialverwendung->gueltigAb) ?></td>
                <td><?= h($materialverwendung->gueltigBis) ?></td>
                <td><?= h($materialverwendung->verpackung_id) ?></td>
                <td><?= h($materialverwendung->material_id) ?></td>
                <td><?= h($materialverwendung->recyclingmethode_id) ?></td>
                <td><?= h($materialverwendung->verarbeitung_id) ?></td>
                <td><?= h($materialverwendung->menge) ?></td>
                <td><?= h($materialverwendung->flaeche) ?></td>
                <td><?= h($materialverwendung->recyclingquote) ?></td>
                <td><?= h($huhu) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materialverwendung', 'action' => 'view', $materialverwendung->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materialverwendung', 'action' => 'edit', $materialverwendung->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materialverwendung', 'action' => 'delete', $materialverwendung->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialverwendung->id)]) ?>
                </td>
            </tr>
            
            <?php endforeach; ?>
            <tr>
            	<td colespan="12"><?= h($huhu) ?></td>
            </tr>
        </table>
        <?php endif; ?>
        <h3><?= h($huhu) ?></h3>
    </div>
</div>

