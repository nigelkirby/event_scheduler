<?php
/**
 * Created by PhpStorm.
 * User: nikirby
 * Date: 6/6/15
 * Time: 2:58 PM
 */
namespace App\View\Helper;

use Cake\View\Helper;

class InputHelper extends Helper
{
    public $helpers = array('Form');

    public function makeInput($name, $opts = null)
    {
        $default_args = [
            'label' => [
                'class' => 'col-sm-2' ],
            'class' => 'input-sm'
        ];
        $opts_merge = (isset($opts)) ? array_merge($default_args,$opts) : $default_args;
        return $this->Form->input($name, $opts_merge);

    }
}