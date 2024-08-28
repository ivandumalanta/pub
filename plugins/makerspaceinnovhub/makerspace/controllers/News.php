<?php namespace MakerspaceInnovhub\Makerspace\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use MakerspaceInnovhub\Makerspace\Models\News as NewsModel;
class News extends Controller
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
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item', 'side-menu-item2');
    }
    public function indexAPI() {
        return response()->json(NewsModel::all()->setHidden(['deleted_at', 'news_content', 'title_tag', 'meta_description', 'keywords']));
    }
    public function showAPI($slug) {
        $newsName = str_replace('-', ' ', $slug);
        $showNews = NewsModel::where('news_title', $newsName)->first();
        if ($showNews) {
            return response()->json($showNews->setHidden(['deleted_at', 'news_description']));
        } else {
            return response()->json(['message' => 'News not found'], 404);
        }
    }
}
