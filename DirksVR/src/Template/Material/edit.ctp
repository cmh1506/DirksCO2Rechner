<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material $material
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $material->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Material'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materialverwendung'), ['controller' => 'Materialverwendung', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="material form large-9 medium-8 columns content">
    <?= $this->Form->create($material) ?>
    <fieldset>
        <legend><?= __('Edit Material') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('kennung');
            echo $this->Form->control('gueltigAb', ['empty' => true]);
            echo $this->Form->control('gueltigBis', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
