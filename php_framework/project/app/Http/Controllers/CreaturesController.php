<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class CreaturesController extends Controller
{

    /**
     * A function to redirect to creature list page
     *
     * @return void
     */
    public function index()
    {
        $title = 'Creatures!';
        $creatures = Creature::all();
        return view('creatures/index', compact('title', 'creatures'));
    }

    /**
     * A function to redirect to detail page
     *
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        $data = Creature::find($id);
        return view('creatures/show', compact('data'));
    }
}
