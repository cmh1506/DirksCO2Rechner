<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materialverwendung $materialverwendung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materialverwendung->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materialverwendung->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['action' => 'index']) ?></li>
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
<div class="materialverwendung form large-9 medium-8 columns content">
    <?= $this->Form->create($materialverwendung) ?>
    <fieldset>
        <legend><?= __('Edit Materialverwendung') ?></legend>
        <?php
            echo $this->Form->control('kennung');
            echo $this->Form->control('gueltigAb', ['empty' => true]);
            echo $this->Form->control('gueltigBis', ['empty' => true]);
            echo $this->Form->control('verpackung_id', ['options' => $verpackung]);
            echo $this->Form->control('material_id', ['options' => $material]);
            echo $this->Form->control('recyclingmethode_id', ['options' => $recyclingmethode]);
            echo $this->Form->control('verarbeitung_id', ['options' => $verarbeitung]);
            echo $this->Form->control('menge');
            echo $this->Form->control('flaeche');
            echo $this->Form->control('recyclingquote');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
