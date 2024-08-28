<?php namespace MakerspaceInnovhub\Makerspace\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use MakerspaceInnovhub\Makerspace\Models\Service as ServiceModel;
use MakerspaceInnovhub\Makerspace\Models\ServiceCategory as CategoryModel;
class Service extends Controller
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
        BackendMenu::setContext('MakerspaceInnovhub.Makerspace', 'main-menu-item', 'side-menu-item');
    }

    public function indexAPI() {
        return response()->json(ServiceModel::all()->setHidden(['deleted_at', 'content']));
    }

    public function filterAPI($slug) {
        // Fetch the category object by ID
        $categoryName = str_replace('-', ' ', $slug);
        $category = CategoryModel::where('category_name', $categoryName)->first();

        // Check if the category exists
        if ($category) {
            
            $services = ServiceModel::where('category_id', $category->category_name)
                ->get()
                ->makeHidden(['deleted_at', 'content']); // Use makeHidden to hide attributes
    
            // Return services in JSON format
            if (!$services->isEmpty()) {
                return response()->json([
                    'category name' => $category->category_name,
                    'category description' => $category->description, // or any relevant category field
                    'services' => $services,
                ]);
            } else {
                // No services found for the category
                return response()->json(['message' => 'No services found for the category'], 404);
            }
        } else {
            // No category found
            return response()->json(['message' => 'Category not found'], 404);
        }
    }
    
    public function showAPI($id) {
        $services = ServiceModel::find($id);
        if ($services) {
            return response()->json($services->setHidden(['deleted_at', 'description']));
        } else {
            return response()->json(['message' => 'no object'], 404);
        }
    }

}
