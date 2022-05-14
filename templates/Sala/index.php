<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala[]|\Cake\Collection\CollectionInterface $sala
 */
?>
<div class="sala index content">
    <?= $this->Html->link(__('New Sala'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sala') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('numero_sala') ?></th>
                    <th><?= $this->Paginator->sort('total_asientos') ?></th>
                    <th><?= $this->Paginator->sort('asientos_ocupados') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sala as $sala): ?>
                <tr>
                    <td><?= $this->Number->format($sala->numero_sala) ?></td>
                    <td><?= $this->Number->format($sala->total_asientos) ?></td>
                    <td><?= $this->Number->format($sala->asientos_ocupados) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sala->numero_sala]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sala->numero_sala]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sala->numero_sala], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->numero_sala)]) ?>
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
