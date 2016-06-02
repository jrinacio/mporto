<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicos Controller
 *
 * @property \App\Model\Table\ServicosTable $Servicos
 */
class ServicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Categorias']
        ];
        $servicos = $this->paginate($this->Servicos);

        $this->set(compact('servicos'));
        $this->set('_serialize', ['servicos']);
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => ['Usuarios', 'Categorias', 'Arquivos']
        ]);

        $this->set('servico', $servico);
        $this->set('_serialize', ['servico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servicos->newEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            $servico->usuario_id = $this->Auth->user('id');
            if ($this->Servicos->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The servico could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Servicos->Usuarios->find('list', ['limit' => 200]);
        $categorias = $this->Servicos->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'usuarios', 'categorias'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            if ($this->Servicos->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The servico could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Servicos->Usuarios->find('list', ['limit' => 200]);
        $categorias = $this->Servicos->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'usuarios', 'categorias'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servicos->get($id);
        if ($this->Servicos->delete($servico)) {
            $this->Flash->success(__('The servico has been deleted.'));
        } else {
            $this->Flash->error(__('The servico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
