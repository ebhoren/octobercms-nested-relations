<?php namespace DominicMercier\Nikeid\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Colors extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DominicMercier.Nikeid', 'nikeid-menu-item', 'nikeid-colors');
    }
}