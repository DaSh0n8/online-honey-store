<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderLine Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $country
 * @property string $state
 * @property int $post_code
 * @property string $payment_method
 * @property string $ship_method
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Product $product
 */
class OrderLine extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'country' => true,
        'state' => true,
        'post_code' => true,
        'payment_method' => true,
        'ship_method' => true,
        'order_id' => true,
        'product_id' => true,
        'quantity' => true,
        'order' => true,
        'product' => true,
    ];
}
