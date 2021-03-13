<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VerpackungTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VerpackungTable Test Case
 */
class VerpackungTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VerpackungTable
     */
    public $Verpackung;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Verpackung',
        'app.Users',
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
        $config = TableRegistry::getTableLocator()->exists('Verpackung') ? [] : ['className' => VerpackungTable::class];
        $this->Verpackung = TableRegistry::getTableLocator()->get('Verpackung', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Verpackung);

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
