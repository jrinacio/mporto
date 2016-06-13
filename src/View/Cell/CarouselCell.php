<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Carousel cell
 */
class CarouselCell extends Cell
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
        $imagens = $this->Arquivos->find()
                    ->select(['dir', 'name', 'titulo', 'type'])
                    ->where (['ativo' => 1, 'carousel' => 1]);
        $this->set('imagens', $imagens);
//        debug($imagens);
//        die('lol');
    }
}
