<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colaboradores Controller
 *
 * @property \App\Model\Table\ColaboradoresTable $Colaboradores
 */
class ColaboradoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $colaboradores = $this->paginate($this->Colaboradores);

        $this->set(compact('colaboradores'));
        $this->set('_serialize', ['colaboradores']);
    }

    /**
     * View method
     *
     * @param string|null $id Colaboradore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colaboradore = $this->Colaboradores->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('colaboradore', $colaboradore);
        $this->set('_serialize', ['colaboradore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colaborador = $this->Colaboradores->newEntity();
        if ($this->request->is('post')) {
            $colaborador = $this->Colaboradores->patchEntity($colaborador, $this->request->data);
            $colaborador->usuario_id = $this->Auth->user('id');
            if ($this->Colaboradores->save($colaborador)) {
                $this->Flash->success(__('O colaborador foi salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The colaboradore could not be saved. Please, try again.'));
            }
        }
//        $usuarios = $this->Colaboradores->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('colaborador'));
        $this->set('_serialize', ['colaborador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Colaboradore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colaboradore = $this->Colaboradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colaboradore = $this->Colaboradores->patchEntity($colaboradore, $this->request->data);
            if ($this->Colaboradores->save($colaboradore)) {
                $this->Flash->success(__('The colaboradore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The colaboradore could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Colaboradores->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('colaboradore', 'usuarios'));
        $this->set('_serialize', ['colaboradore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Colaboradore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colaboradore = $this->Colaboradores->get($id);
        if ($this->Colaboradores->delete($colaboradore)) {
            $this->Flash->success(__('The colaboradore has been deleted.'));
        } else {
            $this->Flash->error(__('The colaboradore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function teste()
    {
        $this->loadModel('Colaboradores');
        $colaboradores = $this->Colaboradores->find()
                ->select(['dir', 'filename', 'nome', 'link'])
                ->where(['ativo' => 1]);
        $this->set('colaboradores', $colaboradores);
    }
}
