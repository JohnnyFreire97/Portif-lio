<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anunciante $anunciante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Anunciante'), ['action' => 'edit', $anunciante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anunciante'), ['action' => 'delete', $anunciante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anunciante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Anunciantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anunciante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="anunciantes view large-9 medium-8 columns content">
    <h3><?= h($anunciante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($anunciante->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sobrenome') ?></th>
            <td><?= h($anunciante->sobrenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf Cnpj') ?></th>
            <td><?= h($anunciante->cpf_cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($anunciante->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($anunciante->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($anunciante->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($anunciante->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($anunciante->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($anunciante->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anunciante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($anunciante->numero) ?></td>
        </tr>
    </table>
</div>
