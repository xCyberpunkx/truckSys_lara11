<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;

class CamionController extends Controller
{
    public function index()
    {
        $camions = Camion::all();
        return view('index', compact('camions'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
        ]);

        Camion::create($request->all());

        return redirect()->route('index')->with('success', 'Camion created successfully.');
    }

    public function show($id)
    {
        $camion = Camion::find($id);

        if (!$camion) {
            return redirect()->route('index')->with('error', 'Camion not found.');
        }

        return view('show', compact('camion'));
    }

    public function edit($id)
    {
        $camion = Camion::find($id);
        return view('edit', compact('camion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
        ]);

        $camion = Camion::find($id);
        $camion->update($request->all());

        return redirect()->route('index')->with('success', 'Camion updated successfully.');
    }

    public function destroy($id)
    {
        $camion = Camion::find($id);
        $camion->delete();

        return redirect()->route('index')->with('success', 'Camion deleted successfully.');
    }
}
