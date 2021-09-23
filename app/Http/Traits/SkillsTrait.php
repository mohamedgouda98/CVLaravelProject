<?php
namespace App\Http\Traits;

trait SkillsTrait{

    public function findService($skillId)
    {
        return $this->skillsModel::find($skillId);
    }
}
