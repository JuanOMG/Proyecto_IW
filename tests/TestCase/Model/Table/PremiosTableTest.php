<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PremiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PremiosTable Test Case
 */
class PremiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PremiosTable
     */
    protected $Premios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Premios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Premios') ? [] : ['className' => PremiosTable::class];
        $this->Premios = $this->getTableLocator()->get('Premios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Premios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PremiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
