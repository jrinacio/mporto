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
            'contain' => ['Usuarios', 'Categorias', 'Empresas']
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
            'contain' => ['Usuarios', 'Categorias', 'Arquivos', 'Empresas']
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
        $empresas = $this->Servicos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'usuarios', 'categorias', 'empresas'));
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
        $empresas = $this->Servicos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('servico', 'usuarios', 'categorias', 'empresas'));
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
    
    public function sobre()
    {
        $this->viewBuilder()->layout('simples');
        
        $this->loadModel('Detalhes');
        
        $subquery = $this->Servicos->Empresas->find();
        
        $query = $this->Servicos->find()
                ->select([
                    'Servicos.id',
                    'Servicos.nome',
                    'Empresas.id',
                    'Detalhes.empresa_id',
                    'Detalhes.descricao'
                ])
                ->join([
                    'Detalhes' => [
                        'table' => 'detalhes',
                        'type' => 'LEFT',
                        'conditions' => 'Empresas.id = Detalhes.empresa_id'
                    ]
                ])
                ->where([
                    'Detalhes.descricao' => $subquery
                        ->where(['Detalhes.empresa_id = Empresa.id'])
                ]);
        
//        $query = $this->Servicos->find()
//                ->contain(['Categorias', 'Arquivos', 'Empresas', 
//                    'Detalhes' => contain(['Empresas'])
//                ])
//                ->where([
//                    'Categorias.nome' => 'Site', 
//                    'Servicos.nome' => 'Sobre'])
//                ->first();
        
//        $query->leftJoin(['Empresas.id = Detalhes.empresa_id']);       
        
        $this->set('pagina', $query);
        $this->set('_serialize', 'pagina');
//        
//        $servico = $this->Servicos->get($id, [
//            'contain' => ['Categorias', 'Arquivos']
//        ]);

//        $this->set('servico', $servico);
//        $this->set('_serialize', ['servico']);
    }


//    public function display()
//    {
//        $this->loadModel('Servicos');
//        $servicos = $this->Servicos->find()
//                ->select(['id', 'nome', 'descricao'])
//                ->where(['ativo' => 1]);
//        $this->set('servicos', $servicos);
//    }
}
