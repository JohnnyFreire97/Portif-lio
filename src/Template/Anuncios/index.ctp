<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anuncio[]|\Cake\Collection\CollectionInterface $anuncios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Anuncio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Anunciantes'), ['controller' => 'Anunciantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anunciante'), ['controller' => 'Anunciantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anuncios index large-9 medium-8 columns content">
    <h3><?= __('Anuncios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anunciantes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorias_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anuncios as $anuncio): ?>
            <tr>
                <td><?= $this->Number->format($anuncio->id) ?></td>
                <td><?= h($anuncio->nome) ?></td>
                <td><?= h($anuncio->logradouro) ?></td>
                <td><?= $this->Number->format($anuncio->numero) ?></td>
                <td><?= h($anuncio->complemento) ?></td>
                <td><?= h($anuncio->bairro) ?></td>
                <td><?= $this->Number->format($anuncio->cep) ?></td>
                <td><?= $anuncio->has('anunciante') ? $this->Html->link($anuncio->anunciante->id, ['controller' => 'Anunciantes', 'action' => 'view', $anuncio->anunciante->id]) : '' ?></td>
                <td><?= $anuncio->has('categoria') ? $this->Html->link($anuncio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $anuncio->categoria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anuncio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anuncio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $anuncio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anuncio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
