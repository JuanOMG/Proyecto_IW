<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HorarioFixture
 */
class HorarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'horario';
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
                'hora' => '23:14:47',
            ],
        ];
        parent::init();
    }
}
