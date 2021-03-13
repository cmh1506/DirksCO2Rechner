<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $kennung
 * @property \Cake\I18n\FrozenDate|null $gueltigAb
 * @property \Cake\I18n\FrozenDate|null $gueltigBis
 *
 * @property \App\Model\Entity\Materialverwendung[] $materialverwendung
 */
class Material extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'kennung' => true,
        'gueltigAb' => true,
        'gueltigBis' => true,
        'materialverwendung' => true,
    ];
}
