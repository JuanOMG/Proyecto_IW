<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionFixture
 */
class FuncionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'funcion';
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
                'pelicula_id' => 1,
                'sala_id' => 1,
                'horario_id' => 1,
            ],
        ];
        parent::init();
    }
}
