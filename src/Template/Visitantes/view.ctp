<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante $visitante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visitante'), ['action' => 'edit', $visitante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visitante'), ['action' => 'delete', $visitante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visitantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visitante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visitantes view large-9 medium-8 columns content">
    <h3><?= h($visitante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($visitante->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sobrenome') ?></th>
            <td><?= h($visitante->sobrenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($visitante->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($visitante->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($visitante->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($visitante->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($visitante->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($visitante->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visitante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($visitante->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($visitante->numero) ?></td>
        </tr>
    </table>
</div>
