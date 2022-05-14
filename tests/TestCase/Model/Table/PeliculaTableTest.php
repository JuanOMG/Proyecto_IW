<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeliculaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeliculaTable Test Case
 */
class PeliculaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeliculaTable
     */
    protected $Pelicula;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pelicula',
        'app.Categoria',
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
        $config = $this->getTableLocator()->exists('Pelicula') ? [] : ['className' => PeliculaTable::class];
        $this->Pelicula = $this->getTableLocator()->get('Pelicula', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pelicula);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeliculaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PeliculaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
