<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Premios Controller
 *
 * @property \App\Model\Table\PremiosTable $Premios
 * @method \App\Model\Entity\Premio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PremiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $premios = $this->paginate($this->Premios);

        $this->set(compact('premios'));
    }

    /**
     * View method
     *
     * @param string|null $id Premio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $premio = $this->Premios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('premio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $premio = $this->Premios->newEmptyEntity();
        if ($this->request->is('post')) {
            $premio = $this->Premios->patchEntity($premio, $this->request->getData());
            if ($this->Premios->save($premio)) {
                $this->Flash->success(__('The premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The premio could not be saved. Please, try again.'));
        }
        $this->set(compact('premio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Premio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $premio = $this->Premios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $premio = $this->Premios->patchEntity($premio, $this->request->getData());
            if ($this->Premios->save($premio)) {
                $this->Flash->success(__('The premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The premio could not be saved. Please, try again.'));
        }
        $this->set(compact('premio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Premio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $premio = $this->Premios->get($id);
        if ($this->Premios->delete($premio)) {
            $this->Flash->success(__('The premio has been deleted.'));
        } else {
            $this->Flash->error(__('The premio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
