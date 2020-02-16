<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anuncio $anuncio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Anuncio'), ['action' => 'edit', $anuncio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anuncio'), ['action' => 'delete', $anuncio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anuncio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Anuncios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anuncio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anunciantes'), ['controller' => 'Anunciantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anunciante'), ['controller' => 'Anunciantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="anuncios view large-9 medium-8 columns content">
    <h3><?= h($anuncio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($anuncio->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($anuncio->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($anuncio->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($anuncio->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anunciante') ?></th>
            <td><?= $anuncio->has('anunciante') ? $this->Html->link($anuncio->anunciante->id, ['controller' => 'Anunciantes', 'action' => 'view', $anuncio->anunciante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $anuncio->has('categoria') ? $this->Html->link($anuncio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $anuncio->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anuncio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($anuncio->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= $this->Number->format($anuncio->cep) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($anuncio->descricao)); ?>
    </div>
</div>
