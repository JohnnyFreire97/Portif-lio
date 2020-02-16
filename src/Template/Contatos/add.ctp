<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contatos form large-9 medium-8 columns content">
    <?= $this->Form->create($contato) ?>
    <fieldset>
        <legend><?= __('Add Contato') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
