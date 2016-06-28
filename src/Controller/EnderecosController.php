<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 */
class EnderecosController extends AppController
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
        $enderecos = $this->paginate($this->Enderecos);

        $this->set(compact('enderecos'));
        $this->set('_serialize', ['enderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('endereco', $endereco);
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Enderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'empresas'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Enderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'empresas'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('The endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The endereco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
