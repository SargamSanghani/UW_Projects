<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreaturesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * A method to show the admin list view of creatures
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request->input('search')) {
            $creatures = Creature::where('name', 'LIKE', '%' . $request->input('search') . '%')
                ->orWhere('id', 'LIKE', '%' . $request->input('search') . '%')->paginate($this->MAX_PER_PAGE);
        } else {
            $creatures = Creature::latest()->paginate($this->MAX_PER_PAGE);
        }
        return view('admin/index', compact('creatures'));
    }

    /**
     * A method to be used for creating the creature
     */
    public function create()
    {
        $title = 'Create Creature';
        return view('admin/creatures/create', compact('title'));
    }

    /**
     * A method to be used for processing the POST submission
     *
     * @return void
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'size' => 'required|string',
            'color' => 'required|string',
            'lifespan' => 'required|string'
        ]);

        if ($request->file('image')) {
            $path =  $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.png');

        Creature::create($valid);

        session()->flash('success', 'Creature successfully created!');

        return redirect('/admin/creatures');
    }

    /**
     * A method to be used to edit the creature
     */
    public function edit(Creature $creature)
    {
        $title = "Edit Creature";
        return view('admin/creatures/edit', compact('creature', 'title'));
    }

    /**
     * A method to be used to update the creature
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'size' => 'required|string',
            'color' => 'required|string',
            'lifespan' => 'required|string'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $creature = Creature::find($valid['id']);

        $valid['image'] = basename($path ?? $creature->image);

        $creature->update($valid);

        if ($creature->save()) {
            session()->flash('success', 'Creature was successfully updated!');
        } else {
            session()->flash('error', 'There was a problem updating the creature!');
        }
        return redirect('/admin/creatures');
    }

    /**
     * A method to be used while deleting the creature
     */
    public function destroy($id)
    {
        $creature = Creature::find($id);
        if ($creature->delete()) {
            session()->flash('success', 'Creature was deleted!');
            return redirect('/admin/creatures');
        }
        session()->flash('error', 'There was a problem deleting the creature!');
        return redirect('/admin/creatures');
    }
}
