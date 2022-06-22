<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pelicula $pelicula
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pelicula'), ['action' => 'edit', $pelicula->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pelicula'), ['action' => 'delete', $pelicula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pelicula'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pelicula'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pelicula view content">
            <table>
                <tr>

                    <td><img width="250px" height="396px" src="<?= h($pelicula->tumbnail)?>"></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($pelicula->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($pelicula->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $pelicula->has('categorium') ? $this->Html->link($pelicula->categorium->nombre, ['controller' => 'Categoria', 'action' => 'view', $pelicula->categorium->id]) : '' ?></td>
                </tr>
                <tr>
                    <!--      <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pelicula->id) ?></td>-->
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Funciones') ?></h4>
                <?php if (!empty($pelicula->funcion)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>

                            <th><?= __('Pelicula') ?></th>
                            <th><?= __('Sala') ?></th>

                            <th class="actions"><?= __('Info') ?></th>
                        </tr>
                        <?php foreach ($pelicula->funcion as $funcion) : ?>
                        <tr>


                            <td><?= h($pelicula->nombre) ?></td>
                            <td><?= h($funcion->sala_id) ?></td>

                            <td class="actions">
                              <?=$this->Html->link('Comprar',['controller' => 'premios','action' => 'index']);?>

                                <?= $this->Html->link(__('Más información'), ['controller' => 'Funcion', 'action' => 'view', $funcion->id]) ?>
                          <!--      <?= $this->Html->link(__('Edit'), ['controller' => 'Funcion', 'action' => 'edit', $funcion->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcion', 'action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id)]) ?>-->
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
