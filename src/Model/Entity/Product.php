<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int|null $sku
 * @property string $description
 * @property string $weight
 * @property string $category
 * @property string|resource|null $image
 * @property int|null $quantity
 *
 * @property \App\Model\Entity\OrderLine[] $order_lines
 */
class Product extends Entity
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
        'name' => true,
        'price' => true,
        'sku' => true,
        'description' => true,
        'weight' => true,
        'category' => true,
        'image' => true,
        'quantity' => true,
        'order_lines' => true,
    ];
}
