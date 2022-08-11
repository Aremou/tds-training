<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\SessionOuverte;
use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    public function index(){
        $formations = Formation::all();
        $categories = Categorie::all();
        $newsletters = Newsletter::all();
        $sessions = SessionOuverte::all();
        return view('dashboard.index', compact('formations', 'categories', 'newsletters', 'sessions'));
    }
}
