<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura $factura
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $funcion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Factura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factura form content">
            <?= $this->Form->create($factura) ?>
            <fieldset>
                <legend><?= __('Datos de la Factura') ?></legend>

                <?php

                  $funcionID =  $_SESSION['funcionID'];
                  $userID = $_SESSION['userID'];//
                  $nomPel = $_SESSION['nomPel'];
                  $horaF = $_SESSION['horaF'];
                  $premio = $_SESSION['premio'];

              

                  echo "<h4>ID Usuario:</h4>";
                  //  echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->input('user_id',array('readonly' => true,'style'=>'border:none;background:none','default'=> $userID));
                    //echo $this->Form->control('funcion_id', ['options' => $funcion]);
                    echo "<hr>";
                    echo "<h4>Funcion:</h4>";
                    echo $this->Form->input('funcion_id',array('readonly' => true,'style'=>'border:none;background:none','default'=> $funcionID));
                    echo '<p style="font-size:120%;">'.$nomPel.'</p>';
                    echo '<p style="font-size:120%;">'.$horaF.'</p>';
echo "<h3 style='float:right'>$</h3>";
                    echo $this->Form->input('precio',array('readonly' => true,'style'=>'float:right;font-size:240%;border:none;width:5%;text-align: center;'));
echo "<h4 style='float:right'>Precio:  </h4>";
                  //  echo $this->Form->control('beneficio');
                  echo "<hr>";
                  echo "<h4>Beneficio:</h4>";
                    echo $this->Form->input('beneficio',array('readonly' => true,'style'=>'border:none;background:none','default'=> $premio));


                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
