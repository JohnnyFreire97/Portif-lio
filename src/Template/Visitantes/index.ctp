<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante[]|\Cake\Collection\CollectionInterface $visitantes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Visitante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visitantes index large-9 medium-8 columns content">
    <h3><?= __('Visitantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobrenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
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
            <?php foreach ($visitantes as $visitante): ?>
            <tr>
                <td><?= $this->Number->format($visitante->id) ?></td>
                <td><?= h($visitante->nome) ?></td>
                <td><?= h($visitante->sobrenome) ?></td>
                <td><?= $this->Number->format($visitante->cpf) ?></td>
                <td><?= h($visitante->logradouro) ?></td>
                <td><?= $this->Number->format($visitante->numero) ?></td>
                <td><?= h($visitante->complemento) ?></td>
                <td><?= h($visitante->bairro) ?></td>
                <td><?= h($visitante->cep) ?></td>
                <td><?= h($visitante->telefone) ?></td>
                <td><?= h($visitante->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visitante->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitante->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->id)]) ?>
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
