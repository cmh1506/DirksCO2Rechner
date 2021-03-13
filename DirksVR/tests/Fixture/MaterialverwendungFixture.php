<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialverwendungFixture
 */
class MaterialverwendungFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'materialverwendung';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'kennung' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gueltigAb' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'gueltigBis' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'verpackung_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'material_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recyclingmethode_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'verarbeitung_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'menge' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'flaeche' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'recyclingquote' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'material_id' => ['type' => 'index', 'columns' => ['material_id'], 'length' => []],
            'recyclingmethode_id' => ['type' => 'index', 'columns' => ['recyclingmethode_id'], 'length' => []],
            'verarbeitung_id' => ['type' => 'index', 'columns' => ['verarbeitung_id'], 'length' => []],
            'verpackung_id' => ['type' => 'index', 'columns' => ['verpackung_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'materialverwendung_ibfk_1' => ['type' => 'foreign', 'columns' => ['material_id'], 'references' => ['material', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'materialverwendung_ibfk_2' => ['type' => 'foreign', 'columns' => ['recyclingmethode_id'], 'references' => ['recyclingmethode', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'materialverwendung_ibfk_3' => ['type' => 'foreign', 'columns' => ['verarbeitung_id'], 'references' => ['verarbeitung', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'materialverwendung_ibfk_4' => ['type' => 'foreign', 'columns' => ['verpackung_id'], 'references' => ['verpackung', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'kennung' => 'Lorem ipsum d',
                'gueltigAb' => '2021-02-20',
                'gueltigBis' => '2021-02-20',
                'verpackung_id' => 1,
                'material_id' => 1,
                'recyclingmethode_id' => 1,
                'verarbeitung_id' => 1,
                'menge' => 1,
                'flaeche' => 1,
                'recyclingquote' => 1,
            ],
        ];
        parent::init();
    }
}
