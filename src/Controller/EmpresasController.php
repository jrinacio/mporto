<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
//use Cake\Mailer\MailerAwareTrait;
use Cake\Core\Configure;

/**
 * Empresas Controller
 *
 * @property \App\Model\Table\EmpresasTable $Empresas
 */
class EmpresasController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Usuarios']
        ];
        $empresas = $this->paginate($this->Empresas);

        $this->set(compact('empresas'));
        $this->set('_serialize', ['empresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresas->get($id, [
            'contain' => ['Categorias', 'Usuarios', 'Setores', 'Detalhes', 'Enderecos', 'Funcionarios']
        ]);
//        debug($empresa);
//        die('lol');

        $this->set('empresa', $empresa);
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresa = $this->Empresas->newEntity();
        if ($this->request->is('post')) {
//            debug($this->request->data);
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->data);
            $empresa->usuario_id = $this->Auth->user('id');
//            debug($empresa);
//            die('lol');
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
            }
        }
        $setores = $this->Empresas->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
            'order' => 'nome'
        ]);
        
        $categorias = $this->Empresas->Categorias->find('list', ['limit' => 200]);
        $usuarios = $this->Empresas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('empresa', 'setores', 'categorias', 'usuarios'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresa = $this->Empresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->data);
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
            }
        }
        ;
        $empresas = $this->Empresas->find('list', [
            'keyValue' => 'id',
            'valueField' => 'nome',
            'order' => 'nome'
            ]);
        $categorias = $this->Empresas->Categorias->find('list', ['limit' => 200]);
        $usuarios = $this->Empresas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('empresa', 'empresas', 'categorias', 'usuarios'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresas->get($id);
        if ($this->Empresas->delete($empresa)) {
            $this->Flash->success(__('The empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function contato()
    {
        //        $this->request->allowMethod(['post', 'contato']);
        if($this->request->is('post'))
        {
            $msg = $this->request->data;
            try
            {
                $email = new Email();
                $email->transport('porto');
                $email->sender('luiz.fonseca@portodesantos.com.br');
                $email->from($msg['email']);
                $email->to('luizmew@hotmail.com');
                $email->replyTo($msg['email']);
                $email->subject($msg['assunto']);
                $email->message($msg['mensagem']);
//                Debug($email);
                $email->send();
                $this->Flash->success('Mensagem enviada...');
                $this->redirect(['action' => 'contato']);
            } 
            catch (Exception $ex) 
            {
                $this->Flash->error($ex);
            }
        }
        $this->viewBuilder()->layout('frontend');
//        $empresa = $this->Empresas->get(17);
        $empresa = $this->Empresas->find()
                ->contain(['Enderecos'])
                ->where(['Empresas.nome' => 'Complexo Cultural'])
                ->first();
        $this->set(compact('empresa'));
        $this->set('_serialize', ['empresa']);
    }
    
    public function captcha()
    {
        $this->render(false);
        $string = substr(str_shuffle(str_repeat('012345678ABCDEFGHIJKLMNOPQRSTUVWXYZ', 5)), 0, 5);
        $font = WWW_ROOT . 'fonts' . DS . 'FreeSerif.ttf';
        
        $img = imagecreate(120, 30);
        $white = imagecolorallocate($img, 255, 255, 255);
        $background = imagecolorallocate($img, 213, 31, 49);
        imagefilledrectangle($img, 0, 0, 120, 30, $background);
        imagettftext($img, 20, 0, 10, 23, $white, $font, $string);
        imageline($img, 0, 0, 90, 25, $white);
        imageline($img, 0, 30, 60, 0, $white);
        imagepng($img);
        $this->response->type('image/png');
        imagedestroy($img);
    }
}
