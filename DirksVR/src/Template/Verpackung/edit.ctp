<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Verpackung $verpackung
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $verpackung->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $verpackung->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Verpackung'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verpackung form large-9 medium-8 columns content">
    <?= $this->Form->create($verpackung) ?>
    <fieldset>
        <legend><?= __('Edit Verpackung') ?></legend>
        <?php
            echo $this->Form->control('kennung');
            echo $this->Form->control('gueltigAb', ['empty' => true]);
            echo $this->Form->control('gueltigBis', ['empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('name');
            echo $this->Form->control('bemerkung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
