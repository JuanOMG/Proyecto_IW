<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pelicula $pelicula
 * @var string[]|\Cake\Collection\CollectionInterface $categoria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pelicula->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pelicula'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pelicula form content">
            <?= $this->Form->create($pelicula) ?>
            <fieldset>
                <legend><?= __('Edit Pelicula') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('categoria_id', ['options' => $categoria]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
