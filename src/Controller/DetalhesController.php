<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Detalhes Controller
 *
 * @property \App\Model\Table\DetalhesTable $Detalhes
 */
class DetalhesController extends AppController
{
    public $helpers = ['TinyMCE.TinyMCE'];
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas', 'Servicos', 'Usuarios']
        ];
        $detalhes = $this->paginate($this->Detalhes);

        $this->set(compact('detalhes'));
        $this->set('_serialize', ['detalhes']);
    }

    /**
     * View method
     *
     * @param string|null $id Detalhe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detalhe = $this->Detalhes->get($id, [
            'contain' => ['Empresas', 'Usuarios']
        ]);

        $this->set('detalhe', $detalhe);
        $this->set('_serialize', ['detalhe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
//        $configs = [
//            'simple' => [
//                'mode' => 'textareas',
//                'theme' => 'simple',
//                'editor_selector' => 'mceSimple'
//            ],
//            'advanced' => [
//                'mode' => 'textareas',
//                'theme' => 'advanced',
//                'editor_selector' => 'mceAdvanced'
//            ]
//        ];
//
//        $this->TinyMCE->configs = $configs;
        
        $detalhe = $this->Detalhes->newEntity();
        if ($this->request->is('post')) {
            $detalhe = $this->Detalhes->patchEntity($detalhe, $this->request->data);
            if ($this->Detalhes->save($detalhe)) {
                $this->Flash->success(__('The detalhe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The detalhe could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Detalhes->Empresas->find('list');
        $servicos = $this->Detalhes->Servicos->find('list');
        $usuarios = $this->Detalhes->Usuarios->find('list');
        $this->set(compact('detalhe', 'empresas', 'servicos', 'usuarios'));
        $this->set('_serialize', ['detalhe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalhe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detalhe = $this->Detalhes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detalhe = $this->Detalhes->patchEntity($detalhe, $this->request->data);
            if ($this->Detalhes->save($detalhe)) {
                $this->Flash->success(__('The detalhe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The detalhe could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Detalhes->Empresas->find('list');
        $servicos = $this->Detalhes->Servicos->find('list');
        $usuarios = $this->Detalhes->Usuarios->find('list');
        $this->set(compact('detalhe', 'empresas', 'servicos', 'usuarios'));
        $this->set('_serialize', ['detalhe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalhe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detalhe = $this->Detalhes->get($id);
        if ($this->Detalhes->delete($detalhe)) {
            $this->Flash->success(__('The detalhe has been deleted.'));
        } else {
            $this->Flash->error(__('The detalhe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
