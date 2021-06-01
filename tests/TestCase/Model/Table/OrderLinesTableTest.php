<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderlinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderlinesTable Test Case
 */
class OrderlinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderlinesTable
     */
    protected $Orderlines;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Orderlines',
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
        $config = $this->getTableLocator()->exists('Orderlines') ? [] : ['className' => OrderlinesTable::class];
        $this->Orderlines = $this->getTableLocator()->get('Orderlines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Orderlines);

        parent::tearDown();
    }
}
