<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //LOGIN
    public function login(){
      if($this->request->is('post')){
        $user = $this->Auth->identify();
        if($user){
          $this->Auth->setUser($user);
          $this->Flash->error('Login correcto');
          return $this->redirect(['controller' => 'funcion']);
        }
          $this->Flash->error('Login Incorrecto');
      }
    }

    //LOGOUT
    public function logout(){
      $this->Flash->success('Logout correcto!');
      return $this->redirect($this->Auth->logout());
    }

    //REGISTER
    public function register(){
    $user = $this->Users->newEmptyEntity();
    if($this->request->is('post')){
      $user = $this->Users->patchEntity($user,$this->request->getData());
      if($this->Users->save($user)){
        $this->Flash->success('Registrado correctamente!');
        return $this->redirect(['action' => 'login']);
      } else {
        $this->Flash->error('No ha sido registrado');
      }
    }
    $this->set(compact('user'));
    $this->set('_serialize',['user']);
    }

    //ANTES DEL FILTRO
    public function beforeFilter($event){
      $this->Auth->allow(['register']); //Paginas a las que puede ingresar sin login
    }

//NAVEGACION A DIFERENTES VENTANAS DEL ADMINITRADOR
    public function navCategoria(){
      return  $this->redirect(['controller' => 'categoria']);
    }

    public function navPelicula(){
      return  $this->redirect(['controller' => 'pelicula']);
    }

    public function navSala(){
      return  $this->redirect(['controller' => 'sala']);
    }

    public function navHorario(){
      return  $this->redirect(['controller' => 'horario']);
    }

    public function navFuncion(){
      return  $this->redirect(['controller' => 'funcion']);
    }



}
