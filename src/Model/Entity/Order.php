<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property bool $agent_status
 * @property int $subtotal
 * @property \Cake\I18n\FrozenTime $date
 * @property bool $coupon_applied
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\OrderLine[] $order_lines
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'agent_status' => true,
        'subtotal' => true,
        'date' => true,
        'coupon_applied' => true,
        'customer' => true,
        'order_lines' => true,
    ];
}
