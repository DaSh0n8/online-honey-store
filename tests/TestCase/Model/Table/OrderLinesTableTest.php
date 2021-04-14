<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderLinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderLinesTable Test Case
 */
class OrderLinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderLinesTable
     */
    protected $OrderLines;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderLines',
        'app.Orders',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrderLines') ? [] : ['className' => OrderLinesTable::class];
        $this->OrderLines = $this->getTableLocator()->get('OrderLines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderLines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
