<?php namespace MakerspaceInnovhub\Makerspace\Models;

use Model;
use MakerspaceInnovhub\Makerspace\Models\ServiceCategory;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'makerspaceinnovhub_makerspace_service';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public function getCategoryOptions() {
        return ServiceCategory::pluck('category_name','category_name')->toArray();
    }

}