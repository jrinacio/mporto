<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Portfolio cell
 */
class PortfolioCell extends Cell
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
        $this->loadModel('Arquivos');
        $imgs = $this->Arquivos->find()
                ->select(['dir', 'name', 'titulo'])
                ->where(['ativo' => 1, 'acervo' => 1]);
        $this->set('imgs', $imgs);
    }
}
