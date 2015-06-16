<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity.
 */
class Contact extends Entity
{

    protected $_virtual = [
        'full_name',
        'full_name_email'
    ];
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'events' => true,
    ];

    protected function _getFullName()
    {
        return $this->_properties['first_name'] . ' ' .
        $this->_properties['last_name'];
    }

    protected function _getFullNameEmail()
    {
        if (is_null($this->_properties['email'])) {
            return $this->_properties['full_name'];
        }

        return '<a href="mailto:' . $this->_properties['email'] . '">' . $this->_getFullName() . '</a>';
    }
}
