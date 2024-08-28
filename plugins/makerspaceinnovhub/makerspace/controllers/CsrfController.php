<?php namespace Makerspaceinnovhub\Makerspace\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Csrf Controller Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class CsrfController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['makerspaceinnovhub.makerspace.csrfcontroller'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Makerspaceinnovhub.Makerspace', 'makerspace', 'csrfcontroller');
    }
    public function getCsrfToken()
    {
        $token = csrf_token();
        \Log::info("CSRF Token: $token");
        return response()->json(['_token' => $token]);
    }
}
