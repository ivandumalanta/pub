<?php namespace MakerspaceInnovhub\Makerspace\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use MakerspaceInnovhub\Makerspace\Models\ServicePage as ServicePageModel;
class ServicePage extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class
    ];

    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item2', 'side-menu-item3');
    }

    public function index()
    {
        $model = $this->formCreateModelObject()->first();

        if (!$model) {
            $model = $this->formCreateModelObject();
            $model->forceSave();
        }

        return Backend::redirect("makerspaceinnovhub/makerspace/servicepage/update/{$model->id}");
    }
    
    public function indexAPI() {
        return response()->json(ServicePageModel::all()->setHidden(['deleted_at', 'created_at', 'updated_at', 'id']));
    }

}
