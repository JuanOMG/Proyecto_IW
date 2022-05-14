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
