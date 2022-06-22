<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Funcion Controller
 *
 * @property \App\Model\Table\FuncionTable $Funcion
 * @method \App\Model\Entity\Funcion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pelicula', 'Sala', 'Horario'],
        ];
        $funcion = $this->paginate($this->Funcion);

        $this->set(compact('funcion'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcion = $this->Funcion->get($id, [
            'contain' => ['Pelicula', 'Sala', 'Horario'],
        ]);

        $this->set(compact('funcion'));

        $nomPel = $funcion->pelicula->nombre;
        $_SESSION['nomPel'] = $nomPel;

        $horaF = $funcion->horario->hora;
        $_SESSION['horaF'] = $horaF;

        $funcionID = $funcion->id;
        $_SESSION['funcionID'] = $funcionID;


    }




     public function calcularPremio(){
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

      if($hora==$chora){
          if($cmin<=$min){
            //echo("Aplica a Nachos con Queso");
            $this->Flash->success('Login correcto');
          }
      }else{
        //echo("GRACIAS POR ELEGIRNOS!");
        $this->Flash->success('Login NO correcto');
      }

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcion = $this->Funcion->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcion = $this->Funcion->patchEntity($funcion, $this->request->getData());
            if ($this->Funcion->save($funcion)) {
                $this->Flash->success(__('The funcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcion could not be saved. Please, try again.'));
        }
        $pelicula = $this->Funcion->Pelicula->find('list', ['limit' => 200])->all();
        $sala = $this->Funcion->Sala->find('list', ['limit' => 200])->all();
        $horario = $this->Funcion->Horario->find('list', ['limit' => 200])->all();
        $this->set(compact('funcion', 'pelicula', 'sala', 'horario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcion = $this->Funcion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcion = $this->Funcion->patchEntity($funcion, $this->request->getData());
            if ($this->Funcion->save($funcion)) {
                $this->Flash->success(__('The funcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcion could not be saved. Please, try again.'));
        }
        $pelicula = $this->Funcion->Pelicula->find('list', ['limit' => 200])->all();
        $sala = $this->Funcion->Sala->find('list', ['limit' => 200])->all();
        $horario = $this->Funcion->Horario->find('list', ['limit' => 200])->all();
        $this->set(compact('funcion', 'pelicula', 'sala', 'horario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcion = $this->Funcion->get($id);
        if ($this->Funcion->delete($funcion)) {
            $this->Flash->success(__('The funcion has been deleted.'));
        } else {
            $this->Flash->error(__('The funcion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}
