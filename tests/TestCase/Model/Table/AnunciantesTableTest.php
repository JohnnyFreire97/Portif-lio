<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnunciantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnunciantesTable Test Case
 */
class AnunciantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AnunciantesTable
     */
    public $Anunciantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Anunciantes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Anunciantes') ? [] : ['className' => AnunciantesTable::class];
        $this->Anunciantes = TableRegistry::getTableLocator()->get('Anunciantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Anunciantes);

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
