<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Horario Controller
 *
 * @property \App\Model\Table\HorarioTable $Horario
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HorarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $horario = $this->paginate($this->Horario);

        $this->set(compact('horario'));
    }

    /**
     * View method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $horario = $this->Horario->get($id, [
            'contain' => ['Funcion'],
        ]);

        $this->set(compact('horario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $horario = $this->Horario->newEmptyEntity();
        if ($this->request->is('post')) {
            $horario = $this->Horario->patchEntity($horario, $this->request->getData());
            if ($this->Horario->save($horario)) {
                $this->Flash->success(__('The horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horario could not be saved. Please, try again.'));
        }
        $this->set(compact('horario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $horario = $this->Horario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $horario = $this->Horario->patchEntity($horario, $this->request->getData());
            if ($this->Horario->save($horario)) {
                $this->Flash->success(__('The horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horario could not be saved. Please, try again.'));
        }
        $this->set(compact('horario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Horario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $horario = $this->Horario->get($id);
        if ($this->Horario->delete($horario)) {
            $this->Flash->success(__('The horario has been deleted.'));
        } else {
            $this->Flash->error(__('The horario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
