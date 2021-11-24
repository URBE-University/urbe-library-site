<?php

namespace App\Http\Controllers;

use App\Models\Resource;

class ResourceController extends Controller
{
    public function index()
    {
        return view('admin.resources.index', [
            'resources' => Resource::all()
        ]);
    }
}
