<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Horario'), ['action' => 'edit', $horario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Horario'), ['action' => 'delete', $horario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Horario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Horario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horario view content">
            <h3><?= h($horario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($horario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($horario->hora) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Funcion') ?></h4>
                <?php if (!empty($horario->funcion)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pelicula Id') ?></th>
                            <th><?= __('Sala Id') ?></th>
                            <th><?= __('Horario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($horario->funcion as $funcion) : ?>
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
