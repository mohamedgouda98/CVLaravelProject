<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create()
    {
        return view('aPanel.services.addService');
    }

    /**
     * @param Request $request
     * validate request
     * upload image
     * update database
     * return to user
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'image' => 'required|mimes:jpg,png'
        ]);

        $fileName = time() . '_service.' . $request->image->extension();
        $request->image->move(public_path('images/services'), $fileName);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName
        ]);

        session()->flash('done', 'Service Was Added');
        return redirect(route('admin.services.create'));


    }
}
