<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Funcionarios cell
 */
class FuncionariosCell extends Cell
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
        $this->loadModel('Funcionarios');
        $funcionarios = $this->Funcionarios->find()
                ->contain(['Empresas'])
                ->where(['ic_ativo' => 1, 'Empresas.nome' => 'Complexo Cultural']);
        $this->set('funcionarios', $funcionarios);
    }
}
