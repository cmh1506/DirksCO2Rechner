<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Verpackung Entity
 *
 * @property int $id
 * @property string|null $kennung
 * @property \Cake\I18n\FrozenDate|null $gueltigAb
 * @property \Cake\I18n\FrozenDate|null $gueltigBis
 * @property int $user_id
 * @property string|null $name
 * @property string|null $bemerkung
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Materialverwendung[] $materialverwendung
 */
class Verpackung extends Entity
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
        'kennung' => true,
        'gueltigAb' => true,
        'gueltigBis' => true,
        'user_id' => true,
        'name' => true,
        'bemerkung' => true,
        'user' => true,
        'materialverwendung' => true,
    ];
}
