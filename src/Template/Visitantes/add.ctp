<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante $visitante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Visitantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="visitantes form large-9 medium-8 columns content">
    <?= $this->Form->create($visitante) ?>
    <fieldset>
        <legend><?= __('Add Visitante') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('sobrenome');
            echo $this->Form->control('cpf');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
