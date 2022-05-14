<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sala Entity
 *
 * @property int $numero_sala
 * @property int $total_asientos
 * @property int $asientos_ocupados
 *
 * @property \App\Model\Entity\Funcion[] $funcion
 */
class Sala extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'total_asientos' => true,
        'asientos_ocupados' => true,
        'funcion' => true,
    ];
}
