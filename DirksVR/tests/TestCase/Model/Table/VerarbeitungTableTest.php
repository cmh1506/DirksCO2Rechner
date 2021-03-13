<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VerarbeitungTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VerarbeitungTable Test Case
 */
class VerarbeitungTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VerarbeitungTable
     */
    public $Verarbeitung;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Verarbeitung',
        'app.Materialverwendung',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Verarbeitung') ? [] : ['className' => VerarbeitungTable::class];
        $this->Verarbeitung = TableRegistry::getTableLocator()->get('Verarbeitung', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Verarbeitung);

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
