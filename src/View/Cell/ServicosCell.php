<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Servicos cell
 */
class ServicosCell extends Cell
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
        $servicos = $this->Servicos->find()
                ->select(['id', 'nome', 'descricao'])
                ->where(['ativo' => 1]);
        $this->set('servicos', $servicos);
    }
}
