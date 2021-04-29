<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InquiriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InquiriesTable Test Case
 */
class InquiriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InquiriesTable
     */
    protected $Inquiries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Inquiries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Inquiries') ? [] : ['className' => InquiriesTable::class];
        $this->Inquiries = $this->getTableLocator()->get('Inquiries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Inquiries);

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
}
