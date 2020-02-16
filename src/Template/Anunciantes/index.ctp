<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anunciante[]|\Cake\Collection\CollectionInterface $anunciantes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Anunciante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anunciantes index large-9 medium-8 columns content">
    <h3><?= __('Anunciantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobrenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf_cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anunciantes as $anunciante): ?>
            <tr>
                <td><?= $this->Number->format($anunciante->id) ?></td>
                <td><?= h($anunciante->nome) ?></td>
                <td><?= h($anunciante->sobrenome) ?></td>
                <td><?= h($anunciante->cpf_cnpj) ?></td>
                <td><?= h($anunciante->logradouro) ?></td>
                <td><?= $this->Number->format($anunciante->numero) ?></td>
                <td><?= h($anunciante->complemento) ?></td>
                <td><?= h($anunciante->bairro) ?></td>
                <td><?= h($anunciante->cep) ?></td>
                <td><?= h($anunciante->telefone) ?></td>
                <td><?= h($anunciante->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anunciante->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anunciante->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $anunciante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anunciante->id)]) ?>
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
