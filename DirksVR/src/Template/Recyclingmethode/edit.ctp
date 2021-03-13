<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recyclingmethode $recyclingmethode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recyclingmethode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recyclingmethode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recyclingmethode'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recyclingmethode form large-9 medium-8 columns content">
    <?= $this->Form->create($recyclingmethode) ?>
    <fieldset>
        <legend><?= __('Edit Recyclingmethode') ?></legend>
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
