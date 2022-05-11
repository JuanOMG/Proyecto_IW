<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeliculaFixture
 */
class PeliculaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pelicula';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'categoria_id' => 1,
            ],
        ];
        parent::init();
    }
}
