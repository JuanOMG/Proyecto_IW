<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pelicula Controller
 *
 * @property \App\Model\Table\PeliculaTable $Pelicula
 * @method \App\Model\Entity\Pelicula[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeliculaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categoria'],
        ];
        $pelicula = $this->paginate($this->Pelicula);

        $this->set(compact('pelicula'));
    }

    /**
     * View method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pelicula = $this->Pelicula->get($id, [
            'contain' => ['Categoria', 'Funcion'],
        ]);

        $this->set(compact('pelicula'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pelicula = $this->Pelicula->newEmptyEntity();
        if ($this->request->is('post')) {
            $pelicula = $this->Pelicula->patchEntity($pelicula, $this->request->getData());
            if ($this->Pelicula->save($pelicula)) {
                $this->Flash->success(__('The pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pelicula could not be saved. Please, try again.'));
        }
        $categoria = $this->Pelicula->Categoria->find('list', ['limit' => 200])->all();
        $this->set(compact('pelicula', 'categoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pelicula = $this->Pelicula->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pelicula = $this->Pelicula->patchEntity($pelicula, $this->request->getData());
            if ($this->Pelicula->save($pelicula)) {
                $this->Flash->success(__('The pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pelicula could not be saved. Please, try again.'));
        }
        $categoria = $this->Pelicula->Categoria->find('list', ['limit' => 200])->all();
        $this->set(compact('pelicula', 'categoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pelicula id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pelicula = $this->Pelicula->get($id);
        if ($this->Pelicula->delete($pelicula)) {
            $this->Flash->success(__('The pelicula has been deleted.'));
        } else {
            $this->Flash->error(__('The pelicula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
