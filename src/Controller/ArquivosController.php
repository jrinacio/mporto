<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Arquivos Controller
 *
 * @property \App\Model\Table\ArquivosTable $Arquivos
 */
class ArquivosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Eventos', 'Servicos']
        ];
        $arquivos = $this->paginate($this->Arquivos);

        $this->set(compact('arquivos'));
        $this->set('_serialize', ['arquivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arquivo = $this->Arquivos->get($id, [
            'contain' => ['Usuarios', 'Eventos', 'Servicos']
        ]);

        $this->set('arquivo', $arquivo);
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arquivo = $this->Arquivos->newEntity();
        if ($this->request->is('post')) {
            $arquivo = $this->Arquivos->patchEntity($arquivo, $this->request->data);
            $arquivo->usuario_id = $this->Auth->user('id');
            // TODO buscar o parâmetro evento_id ou servico_id
            $arquivo->evento_id = 1;
            $arquivo ->name = $_FILES['file']['name'];
            $arquivo->size = $_FILES['files']['size'];
            $arquivo->type = $_FILES['file']['type'];
            if ($this->Arquivos->save($arquivo)) {
                $this->Flash->success(__('Arquivo salvo.'));
            //    return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O arquivo não foi salvo. Favor tentar novamente.'));
            }
        }
        $usuarios = $this->Arquivos->Usuarios->find('list', ['limit' => 200]);
        $eventos = $this->Arquivos->Eventos->find('list', ['limit' => 200]);
        $servicos = $this->Arquivos->Servicos->find('list', ['limit' => 200]);
        $this->set(compact('arquivo', 'usuarios', 'eventos', 'servicos'));
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arquivo = $this->Arquivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arquivo = $this->Arquivos->patchEntity($arquivo, $this->request->data);
            if ($this->Arquivos->save($arquivo)) {
                $this->Flash->success(__('The arquivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arquivo could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Arquivos->Usuarios->find('list', ['limit' => 200]);
        $eventos = $this->Arquivos->Eventos->find('list', ['limit' => 200]);
        $servicos = $this->Arquivos->Servicos->find('list', ['limit' => 200]);
        $this->set(compact('arquivo', 'usuarios', 'eventos', 'servicos'));
        $this->set('_serialize', ['arquivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arquivo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arquivo = $this->Arquivos->get($id);
        if ($this->Arquivos->delete($arquivo)) {
            $this->Flash->success(__('The arquivo has been deleted.'));
        } else {
            $this->Flash->error(__('The arquivo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
