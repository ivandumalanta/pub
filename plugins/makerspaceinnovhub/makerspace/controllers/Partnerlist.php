<?php namespace MakerspaceInnovhub\Makerspace\Controllers;
use MakerspaceInnovhub\Makerspace\Models\Partnerlist as PartnerModel;
use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Partnerlist extends Controller
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
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item', 'side-menu-item4');
    }
    public function indexAPI() {
        return response()->json(PartnerModel::all()->setHidden(['deleted_at', 'created_at', 'updated_at']));
    }
}
