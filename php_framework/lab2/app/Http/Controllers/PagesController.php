<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * A function to redirect to creature list page
     *
     * @return void
     */
    public function creatures()
    {
        $title = 'Creatures!';
        $creatures = Creature::all();
        return view('creatures', compact('title', 'creatures'));
    }

    /**
     * A function to redirect to detail page
     *
     * @param [type] $id
     * @return void
     */
    public function detail($id)
    {
        $data = Creature::find($id);
        return view('detail', compact('data'));
    }
}
