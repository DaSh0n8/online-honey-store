<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $phone_number
 * @property string $email_address
 * @property string $street_address
 * @property string $suburb
 * @property int $post_code
 * @property string $state
 * @property bool $marketing_emails
 */
class Customer extends Entity
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
        'phone_number' => true,
        'email_address' => true,
        'street_address' => true,
        'suburb' => true,
        'post_code' => true,
        'state' => true,
        'marketing_emails' => true,
    ];
}
