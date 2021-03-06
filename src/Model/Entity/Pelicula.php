<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pelicula Entity
 *
 * @property int $id
 * @property string $tumbnail
 * @property string $nombre
 * @property string $descripcion
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Categorium $categorium
 * @property \App\Model\Entity\Funcion[] $funcion
 */
class Pelicula extends Entity
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
        'tumbnail' => true,
        'nombre' => true,
        'descripcion' => true,
        'categoria_id' => true,
        'categorium' => true,
        'funcion' => true,
    ];
}
