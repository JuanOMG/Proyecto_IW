<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalaFixture
 */
class SalaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sala';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'total_asientos' => 1,
                'asientos_ocupados' => 1,
                'numero_sala' => 1,
            ],
        ];
        parent::init();
    }
}
