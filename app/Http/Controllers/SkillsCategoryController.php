<?php

namespace App\Http\Controllers;

use App\Http\Traits\SkillsCategoryTrait;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillsCategoryController extends Controller
{
    use SkillsCategoryTrait;
    private $skillCategoryModel;

    public function __construct(SkillCategory $skillCategory)
    {
        $this->skillCategoryModel = $skillCategory;
    }

    public function index()
    {
        $categories = $this->getCategories();
        return view('aPanel.skills.skillCategoryList', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $this->skillCategoryModel::create([
            'name' => $request->name
        ]);

        session()->flash('done', 'Category Skills Was Added');
        return redirect(route('admin.skills.categories'));
    }

    public function delete($categoryId)
    {
        $skillCategory = $this->skillCategoryModel::find($categoryId);
        if($skillCategory)
        {
            $skillCategory->delete();
            session()->flash('done', 'Category Skills Was Deleted');
            return redirect(route('admin.skills.categories'));
        }
        return redirect(route('admin.skills.categories'));
    }

    public function update(Request $request, $categoryId)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $skillCategory = $this->skillCategoryModel::find($categoryId);
        if($skillCategory)
        {
            $skillCategory->update([
                'name' => $request->name
            ]);

            session()->flash('done', 'Category Skills Was Updated');
            return redirect(route('admin.skills.categories'));
        }

        return redirect(route('admin.skills.categories'));

    }

}
