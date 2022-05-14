<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcion $funcion
 * @var \Cake\Collection\CollectionInterface|string[] $pelicula
 * @var \Cake\Collection\CollectionInterface|string[] $sala
 * @var \Cake\Collection\CollectionInterface|string[] $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Funcion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcion form content">
            <?= $this->Form->create($funcion) ?>
            <fieldset>
                <legend><?= __('Add Funcion') ?></legend>
                <?php
                    echo $this->Form->control('pelicula_id', ['options' => $pelicula]);
                    echo $this->Form->control('sala_id', ['options' => $sala]);
                    echo $this->Form->control('horario_id', ['options' => $horario]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
