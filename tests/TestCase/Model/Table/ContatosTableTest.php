<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatosTable Test Case
 */
class ContatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatosTable
     */
    public $Contatos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contatos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contatos') ? [] : ['className' => ContatosTable::class];
        $this->Contatos = TableRegistry::getTableLocator()->get('Contatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contatos);

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
}
