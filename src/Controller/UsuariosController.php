<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{
    public $paginate = [
        'fields' => [
            'Usuarios.id',
            'Usuarios.nome',
            'Usuarios.email',
            'Usuarios.perfil',
            'Usuarios.ativo',
            'Usuarios.created'
        ],
        'limit' => '25'
    ];
    
    /**
     * Método de inicialização de componentes
     * 
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
//        $usuarios = $this->paginate($this->Usuarios);
        
        $usuarios = $this->Usuarios->find();

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Arquivos', 'Categorias', 'Eventos']
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
//        debug($this->request->data);
//        die('lol');
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
//            debug($usuario);
//            die('lol');
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }
    
    /**
     * Método de Login
     * 
     * @return url
     */
    public function login()
    {
        $this->set('title', 'Acesso a área administrativa.');
        $this->viewBuilder()->layout('login');
        if($this->request->is('post'))
        {
            $usuario = $this->Auth->identify();
            if($usuario)
            {
                $this->Auth->setUser($usuario);
                $this->Flash->success(__('Usuário conectado.'), [
                    'key' => 'auth'
                ]);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha estão incorretos.'), [
                'key' => 'auth'
            ]);
        }
    }
    
    public function logout()
    {
        $this->Flash->success(__('Você saiu do sistema.'), [
            'key' => 'auth'
        ]);
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
