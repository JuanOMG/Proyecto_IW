<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcion $funcion
 * @var string[]|\Cake\Collection\CollectionInterface $pelicula
 * @var string[]|\Cake\Collection\CollectionInterface $sala
 * @var string[]|\Cake\Collection\CollectionInterface $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Funcion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcion form content">
            <?= $this->Form->create($funcion) ?>
            <fieldset>
                <legend><?= __('Edit Funcion') ?></legend>
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
