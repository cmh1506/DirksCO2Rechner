<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecyclingmethodeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecyclingmethodeTable Test Case
 */
class RecyclingmethodeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecyclingmethodeTable
     */
    public $Recyclingmethode;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Recyclingmethode',
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
        $config = TableRegistry::getTableLocator()->exists('Recyclingmethode') ? [] : ['className' => RecyclingmethodeTable::class];
        $this->Recyclingmethode = TableRegistry::getTableLocator()->get('Recyclingmethode', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recyclingmethode);

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
