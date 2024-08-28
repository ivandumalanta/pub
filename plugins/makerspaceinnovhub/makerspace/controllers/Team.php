<?php namespace MakerspaceInnovhub\Makerspace\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use MakerspaceInnovhub\Makerspace\Models\Team as TeamModel;
class Team extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item', 'side-menu-item6');
    }

    public function indexAPI() {
        return response()->json(TeamModel::all()->setHidden(['deleted_at', 'created_at', 'updated_at']));
    }
}
