<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagensTable Test Case
 */
class ImagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagensTable
     */
    public $Imagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Imagens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Imagens') ? [] : ['className' => ImagensTable::class];
        $this->Imagens = TableRegistry::getTableLocator()->get('Imagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagens);

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
