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
//        $this->paginate = [
//            'contain' => ['Usuarios', 'Eventos', 'Servicos']
//        ];
//        $arquivos = $this->paginate($this->Arquivos);
   
//        $this->set('arqs','<li class="active"><a href="#"><i class="fa fa-list"></i> Arquivos</a></li>');
//        $this->fetch('vwArqs');
//        $config = [
//            'fileds' => [
//                'Arquivos.id', 
//                'Arquivos.evento_id',
//                'Arquivos.servico_id',
//                'Arquivo.nome',
//                'Arquivo.size',
//                'Arquivo.ativo'],
//            'limit' => 6,
//            'contain' => ['Usuarios', 'Eventos', 'Servicos']
//        ];
//        $query = $this->Arquivos->find();
//        $this->set('arquivos', $this->Paginator->paginate($query, $config));
        $arquivos = $this->Arquivos->find()->contain(['Eventos', 'Servicos']);
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
            $arquivo ->name = $_FILES['file']['name'];
            $arquivo->size = $_FILES['file']['size'];
            $arquivo->type = $_FILES['file']['type'];
            if ($this->Arquivos->save($arquivo)) {
                $this->Flash->success(__('Arquivo salvo.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O arquivo não foi salvo. Favor tentar novamente.'));
            }
        }
        $eventos = $this->Arquivos->Eventos->find('list');
        $servicos = $this->Arquivos->Servicos->find('list');
        $this->set(compact('arquivo', 'eventos', 'servicos'));
        $this->set('_serialize', ['arquivo']);
    }
    
    public function adicionar()
    {
        if($this->request->is('post'))
        {
            debug($this->request->data);
            die('lol');
            $arquivo = $this->Arquivos->patchEntities($arquivo, $this->request->data);
            $arquivo->usuario_id = $this->Auth->user('id');
            $arquivo->name = $_FILES['file']['name'];
            $arquivo->size = $_FILES['file']['size'];
            $arquivo->type = $_FILES['file']['type'];
            if($this->Arquivos->save($arquivo))
            {
                $this->Flash->success(__('Arquivo salvo.'));
            }
            else
            {
                $this->Flash->error(__('O arquivo não foi salvo. Favor tentar novamente.'));
            }
        }
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
        //$usuarios = $this->Arquivos->Usuarios->find('list', ['limit' => 200]);
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
    
    /**
     * Método Galeria
     * 
     */
    public function galeria()
    {
        $this->viewBuilder()->layout('ajax');
        $this->set('title', '');
        $config = [
            'fileds' => ['Arquivos.id', 'Arquivos.titulo', 'Arquivos.descricao'],
            'limit' => 6
        ];
        
        $query = $this->Arquivos->find()->where(['ativo' => 1]);
        $this->set('arquivos', $this->Paginator->paginate($query, $config));
        $this->set('_serialize', ['arquivos']);
    }
}
