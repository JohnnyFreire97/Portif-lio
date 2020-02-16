<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitantesTable Test Case
 */
class VisitantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitantesTable
     */
    public $Visitantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Visitantes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Visitantes') ? [] : ['className' => VisitantesTable::class];
        $this->Visitantes = TableRegistry::getTableLocator()->get('Visitantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Visitantes);

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
