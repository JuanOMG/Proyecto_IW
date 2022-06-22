<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pelicula[]|\Cake\Collection\CollectionInterface $pelicula
 */
?>
<div class="pelicula index content">
    <?= $this->Html->link(__('Agregar Pelicula'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pelicula') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                  <!--   <th><?= $this->Paginator->sort('id') ?></th>-->
                    <th><?= $this->Paginator->sort('Portada') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pelicula as $pelicula): ?>
                <tr>
                  <!--  <td><?= $this->Number->format($pelicula->id) ?></td>-->
                    <td><img width="150px" height="250px" src="<?= h($pelicula->tumbnail)?>"></td>
                    <td><?= h($pelicula->nombre) ?></td>
                    <td><?= h($pelicula->descripcion) ?></td>
                    <td><?= $pelicula->has('categorium') ? $this->Html->link($pelicula->categorium->nombre, ['controller' => 'Categoria', 'action' => 'view', $pelicula->categorium->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pelicula->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pelicula->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pelicula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id)]) ?>
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
