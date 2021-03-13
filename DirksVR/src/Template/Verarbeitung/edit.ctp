<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verarbeitung $verarbeitung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $verarbeitung->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $verarbeitung->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Verarbeitung'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verarbeitung form large-9 medium-8 columns content">
    <?= $this->Form->create($verarbeitung) ?>
    <fieldset>
        <legend><?= __('Edit Verarbeitung') ?></legend>
        <?php
            echo $this->Form->control('kennung');
            echo $this->Form->control('gueltigAb', ['empty' => true]);
            echo $this->Form->control('gueltigBis', ['empty' => true]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
