<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorarioTable Test Case
 */
class HorarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorarioTable
     */
    protected $Horario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Horario',
        'app.Funcion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Horario') ? [] : ['className' => HorarioTable::class];
        $this->Horario = $this->getTableLocator()->get('Horario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Horario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HorarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
