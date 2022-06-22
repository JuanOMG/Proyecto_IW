<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcion[]|\Cake\Collection\CollectionInterface $funcion
 */
?>
<div class="funcion index content">
    <?= $this->Html->link(__('New Funcion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                    <th><?= $this->Paginator->sort('sala_id') ?></th>
                    <th><?= $this->Paginator->sort('horario_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcion as $funcion): ?>
                <tr>
                    <td><?= $this->Number->format($funcion->id) ?></td>
                    <td><?= $funcion->has('pelicula') ? $this->Html->link($funcion->pelicula->nombre, ['controller' => 'Pelicula', 'action' => 'view', $funcion->pelicula->id]) : '' ?></td>
                    <td><?= $funcion->has('sala') ? $this->Html->link($funcion->sala->id, ['controller' => 'Sala', 'action' => 'view', $funcion->sala->id]) : '' ?></td>
                    <td><?= $funcion->has('horario') ? $this->Html->link($funcion->horario->hora, ['controller' => 'Horario', 'action' => 'view', $funcion->horario->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funcion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id)]) ?>
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
