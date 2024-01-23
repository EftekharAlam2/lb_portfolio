<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UpdateInfo;
use App\Models\AdditionalInfo;
use App\Models\Project;

class UpdateInfoController extends Controller
{
    public function index()
    {
        $updateInfo = UpdateInfo::first();
        $additionalInfo = AdditionalInfo::first();
        $projects = Project::all();

        return view('frontend.index', compact('updateInfo', 'additionalInfo', 'projects'));
    }
}
