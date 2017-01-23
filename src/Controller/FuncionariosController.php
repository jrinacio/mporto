<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funcionarios Controller
 *
 * @property \App\Model\Table\FuncionariosTable $Funcionarios
 */
class FuncionariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $funcionarios = $this->paginate($this->Funcionarios);

        $this->set(compact('funcionarios'));
        $this->set('_serialize', ['funcionarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('funcionario', $funcionario);
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionarios->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            $funcionario->usuario_id = $this->Auth->user('id');
//            $funcionario->foto = $_FILES['file']['name'];
//            $funcionario->size = $_FILES['file']['size'];
//            $funcionario->type = $_FILES['file']['type'];
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Funcionarios->Empresas->find('list');
        $this->set(compact('funcionario', 'empresas'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Funcionarios->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('funcionario', 'empresas'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('The funcionario has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
