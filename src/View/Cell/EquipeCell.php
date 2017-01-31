<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Equipe cell
 */
class EquipeCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Servicos');
        $equipe = $this->Servicos->find()
                ->contain(['Arquivos'])
                ->where(['ativo' => 1, 'nome' => 'Equipe'])
                ->first();
        $this->set('equipe', $equipe);
    }
}
