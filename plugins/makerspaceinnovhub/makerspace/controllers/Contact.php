<?php namespace MakerspaceInnovhub\Makerspace\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use MakerspaceInnovhub\Makerspace\Models\Contact as ContactModel;
class Contact extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class
    ];

    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item2', 'side-menu-item6');
    }

    public function index()
    {
        $model = $this->formCreateModelObject()->first();

        if (!$model) {
            $model = $this->formCreateModelObject();
            $model->forceSave();
        }

        return Backend::redirect("makerspaceinnovhub/makerspace/contact/update/{$model->id}");
    }
    public function indexAPI() {
        return response()->json(ContactModel::all());
    }
}
