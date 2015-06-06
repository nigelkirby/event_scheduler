<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\View\Helper\TimeHelper;

/**
 * Event Entity.
 */
class Event extends Entity
{

    protected $_virtual = ['string_date'];
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'date' => true,
        'start_time' => true,
        'end_time' => true,
        'contact_id' => true,
        'room_id' => true,
        'contact' => true,
        'room' => true,
    ];

    protected function _getTimeSpan()
    {
        $start_formatted = $this->_properties['start_time']->format('h:m a');
        $end_formatted = $this->_properties['end_time']->format('h:m a');
        return $start_formatted . " - " . $end_formatted;

    }

    protected function _getStringDate()
    {
        return $this->_properties['date']->format('l, F j Y');
    }
}
