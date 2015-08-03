<?php namespace Kodermax\CallBack\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Requests Back-end Controller
 */
class Requests extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kodermax.CallBack', 'callback', 'requests');
    }
}