<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialverwendungTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialverwendungTable Test Case
 */
class MaterialverwendungTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialverwendungTable
     */
    public $Materialverwendung;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Materialverwendung',
        'app.Verpackung',
        'app.Material',
        'app.Recyclingmethode',
        'app.Verarbeitung',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Materialverwendung') ? [] : ['className' => MaterialverwendungTable::class];
        $this->Materialverwendung = TableRegistry::getTableLocator()->get('Materialverwendung', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Materialverwendung);

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
