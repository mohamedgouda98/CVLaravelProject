<?php

namespace App\Http\Controllers;

use App\Http\Traits\SkillsCategoryTrait;
use App\Http\Traits\SkillsTrait;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    use SkillsTrait;
    use SkillsCategoryTrait;
    private $skillsModel;
    private $skillCategoryModel;

    public function __construct(Skill $skill, SkillCategory $skillCategory)
    {
        $this->skillsModel = $skill;
        $this->skillCategoryModel = $skillCategory;
    }


    public function index()
    {
        $skills = $this->skillsModel::with('category')->get();
        $categories = $this->getCategories();
        return view('aPanel.skills.skillList', compact(['skills', 'categories']));
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('aPanel.skills.addSkill', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'number' => 'required|min:1',
            'skillCategoryId' => 'required|exists:skill_categories,id'
        ]);

        $this->skillsModel::create([
            'name' => $request->name,
            'number' => $request->number,
            'skillCategoryId' => $request->skillCategoryId,
        ]);

        session()->flash('done', 'Skill Was Added');
        return redirect(route('admin.skills'));
    }

    public function delete($skillId)
    {
       $skill = $this->findService($skillId);
       if($skill)
       {
           $skill->delete();
           session()->flash('done', 'Skill Was Deleted');
           return redirect(route('admin.skills'));
       }
        return redirect(route('admin.404'));
    }

    public function update(Request $request, $skillId)
    {
        $request->validate([
            'name' => 'required|min:3',
            'number' => 'required|min:1',
            'skillCategoryId' => 'required|exists:skill_categories,id'
        ]);

        $skill = $this->findService($skillId);
        if($skill)
        {
            $skill->update([
                'name' => $request->name,
                'number' => $request->number,
                'skillCategoryId' => $request->skillCategoryId
            ]);
            session()->flash('done', 'Skill Was Updated');
            return redirect(route('admin.skills'));
        }

        return redirect(route('admin.404'));

    }
}
