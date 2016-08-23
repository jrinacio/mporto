<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetalhesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetalhesTable Test Case
 */
class DetalhesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DetalhesTable
     */
    public $Detalhes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.detalhes',
        'app.empresas',
        'app.categorias',
        'app.usuarios',
        'app.arquivos',
        'app.eventos',
        'app.servicos',
        'app.enderecos',
        'app.funcionarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Detalhes') ? [] : ['className' => 'App\Model\Table\DetalhesTable'];
        $this->Detalhes = TableRegistry::get('Detalhes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Detalhes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
