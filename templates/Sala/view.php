<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sala'), ['action' => 'edit', $sala->numero_sala], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sala'), ['action' => 'delete', $sala->numero_sala], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->numero_sala), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sala'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sala'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sala view content">
            <h3><?= h($sala->numero_sala) ?></h3>
            <table>
                <tr>
                    <th><?= __('Total Asientos') ?></th>
                    <td><?= $this->Number->format($sala->total_asientos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Asientos Ocupados') ?></th>
                    <td><?= $this->Number->format($sala->asientos_ocupados) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Sala') ?></th>
                    <td><?= $this->Number->format($sala->numero_sala) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Funcion') ?></h4>
                <?php if (!empty($sala->funcion)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pelicula Id') ?></th>
                            <th><?= __('Sala Id') ?></th>
                            <th><?= __('Horario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sala->funcion as $funcion) : ?>
                        <tr>
                            <td><?= h($funcion->id) ?></td>
                            <td><?= h($funcion->pelicula_id) ?></td>
                            <td><?= h($funcion->sala_id) ?></td>
                            <td><?= h($funcion->horario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Funcion', 'action' => 'view', $funcion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Funcion', 'action' => 'edit', $funcion->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcion', 'action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
