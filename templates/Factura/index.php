<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura[]|\Cake\Collection\CollectionInterface $factura
 */
?>
<div class="factura index content">
    <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Factura') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('funcion_id') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('beneficio') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($factura as $factura): ?>
                <tr>
                    <td><?= $this->Number->format($factura->id) ?></td>
                    <td><?= $factura->has('user') ? $this->Html->link($factura->user->name, ['controller' => 'Users', 'action' => 'view', $factura->user->id]) : '' ?></td>
                    <td><?= $factura->has('funcion') ? $this->Html->link($factura->funcion->id, ['controller' => 'Funcion', 'action' => 'view', $factura->funcion->id]) : '' ?></td>
                    <td><?= $this->Number->format($factura->precio) ?></td>
                    <td><?= h($factura->beneficio) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $factura->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factura->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
