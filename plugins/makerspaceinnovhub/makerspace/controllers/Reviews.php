<?php namespace MakerspaceInnovhub\Makerspace\Controllers;
use MakerspaceInnovhub\Makerspace\Models\Reviews as ReviewModel;
use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Reviews extends Controller
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
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item', 'side-menu-item5');
    }
    public function indexAPI() {
        return response()->json(ReviewModel::all()->setHidden(['deleted_at']));
    }
}
