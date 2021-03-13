<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materialverwendung Entity
 *
 * @property int $id
 * @property string|null $kennung
 * @property \Cake\I18n\FrozenDate|null $gueltigAb
 * @property \Cake\I18n\FrozenDate|null $gueltigBis
 * @property int $verpackung_id
 * @property int $material_id
 * @property int $recyclingmethode_id
 * @property int $verarbeitung_id
 * @property float $menge
 * @property float $flaeche
 * @property float $recyclingquote
 *
 * @property \App\Model\Entity\Verpackung $verpackung
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\Recyclingmethode $recyclingmethode
 * @property \App\Model\Entity\Verarbeitung $verarbeitung
 */
class Materialverwendung extends Entity
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
        'verpackung_id' => true,
        'material_id' => true,
        'recyclingmethode_id' => true,
        'verarbeitung_id' => true,
        'menge' => true,
        'flaeche' => true,
        'recyclingquote' => true,
        'verpackung' => true,
        'material' => true,
        'recyclingmethode' => true,
        'verarbeitung' => true,
    ];
}
