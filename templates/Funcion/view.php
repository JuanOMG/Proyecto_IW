<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcion $funcion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funcion'), ['action' => 'edit', $funcion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcion'), ['action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcion view content">

            <table>
                <tr>
                    <th><?= __('Pelicula') ?></th>
                    <td><?= $funcion->has('pelicula') ? $this->Html->link($funcion->pelicula->nombre, ['controller' => 'Pelicula', 'action' => 'view', $funcion->pelicula->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala') ?></th>
                    <td><?= $funcion->has('sala') ? $this->Html->link($funcion->sala->id, ['controller' => 'Sala', 'action' => 'view', $funcion->sala->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
               <td><?= $funcion->has('horario') ? $this->Html->link($funcion->horario->hora, ['controller' => 'Horario', 'action' => 'view', $funcion->horario->id]) : '' ?></td>
                </tr>
                <tr>
                  <!--     <th><?= __('Id') ?></th>-->
                  <!--     <td><?= $this->Number->format($funcion->id) ?></td>-->
                </tr>
            </table>

            <?php



            date_default_timezone_set("America/Bogota");
            //HORA PELICULA
            $dt = $funcion->horario->hora;
            $hora = (int)substr($dt, 0, 2);
            $min = (int)substr($dt, 3,-3);

            //HORA ACTUAL
            $date = new DateTime();
            $cdt = $date->format('h:i:sa');
            $chora = (int)substr($cdt, 0, 2);
            $cmin = (int)substr($cdt, 3,-5);


$prems = $_SESSION['prems'];



  $premio = $prems[rand(0,(count($prems)-1))];
            if($hora==$chora){
                if($cmin<=$min){

                  echo "<br><h4>".$premio."</h4>" ;
                }else{
                    $premio = "NINGUNO";
                  echo "<br><h4>GRACIAS POR ELEGIRNOS!</h4>";
                }
            }else{
                $premio = "NINGUNO";
              echo "<br><h4>GRACIAS POR ELEGIRNOS!</h4>";
            }

            $_SESSION['premio'] = $premio;

            ?>

            <br>

  <?=$this->Html->link('Comprar',['controller' => 'factura','action' => 'add']);?>


        </div>
    </div>
</div>
