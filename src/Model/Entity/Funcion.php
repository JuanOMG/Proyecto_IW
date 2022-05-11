<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcion Entity
 *
 * @property int $id
 * @property int $pelicula_id
 * @property int $sala_id
 * @property int $horario_id
 *
 * @property \App\Model\Entity\Pelicula $pelicula
 * @property \App\Model\Entity\Sala $sala
 * @property \App\Model\Entity\Horario $horario
 */
class Funcion extends Entity
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
        'pelicula_id' => true,
        'sala_id' => true,
        'horario_id' => true,
        'pelicula' => true,
        'sala' => true,
        'horario' => true,
    ];
}
