<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacturaFixture
 */
class FacturaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'factura';
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
                'user_id' => 1,
                'funcion_id' => 1,
                'precio' => 1,
                'beneficio' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
