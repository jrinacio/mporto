<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Colaboradores cell
 */
class ColaboradoresCell extends Cell
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
        $this->loadModel('Colaboradores');
        $colaboradores = $this->Colaboradores->find()
                ->select(['dir', 'filename', 'nome', 'link'])
                ->where(['ativo' => 1]);
        $this->set('colaboradores', $colaboradores);
    }
}
