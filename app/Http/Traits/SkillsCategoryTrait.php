<?php
namespace App\Http\Traits;

trait SkillsCategoryTrait{

    public function getCategories()
    {
        return $this->skillCategoryModel::get();
    }
}
