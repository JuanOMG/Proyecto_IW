<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionTable Test Case
 */
class FuncionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionTable
     */
    protected $Funcion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Funcion',
        'app.Pelicula',
        'app.Sala',
        'app.Horario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Funcion') ? [] : ['className' => FuncionTable::class];
        $this->Funcion = $this->getTableLocator()->get('Funcion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Funcion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FuncionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FuncionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
