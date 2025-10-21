<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class CloneController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.clone.index');
    }

    public function add()
    {
        return view('admin.dashboard.clone.add_clone');
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('admin.clones');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.dashboard.clone.edit_clone', ['brand' => $brand]);
    }
}
