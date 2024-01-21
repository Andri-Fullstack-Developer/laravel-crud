<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tom;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class TomController extends Controller
{
    /**
     * Display All the Toms from Database
     */
    public function index()
    {
        $toms = Tom::all();
        return view('toms.index', compact('toms'));
        //or, return view(toms.index)->with('toms', $toms);
        //or, View::make('toms.index')->with()
    }

    /**
     * Show the form for creating a new tom.
     */
    public function create()
    {
        return view('toms.create');
    }

    /**
     * Store a newly created tom in database.
     */
    public function store(Request $request)
    {
        $rules = ['name' => 'required', 'email' => 'required|email', 'room' => 'required|numeric|not_in:0'];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return redirect('toms/create')->withErrors($validator)->withInput($request->except('password'));
        }
        else
        {
            $tom = new Tom;
            $tom->name = $request->input('name');
            $tom->email = $request->input('email');
            $tom->level = $request->input('room');
            $tom->save();

            Session::flash('message', $request->input('name').' is added');
            return redirect('toms');
        }
    }

    /**
     * Display the specified Tom
     */
    public function show(string $id)
    {
        $tom = Tom::find($id);
        return view('toms.show', compact('tom'));
    }

    /**
     * Show the Form to Edit Specified Tom
     */
    public function edit(string $id)
    {
        $tom = Tom::find($id);
        return view('toms.edit', compact('tom'));
    }

    /**
     * Update the specified tom in database.
     */
    public function update(Request $request, string $id)
    {
        $rules = ['name' => 'required', 'email' => 'required|email', 'room' => 'required|numeric|not_in:0'];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return redirect('toms/'.$id.'/edit')->withErrors($validator)->withInput($request->except('password'));
        }
        else
        {
            $tom = Tom::find($id);
            $tom->name = $request->input('name');
            $tom->email = $request->input('email');
            $tom->level = $request->input('room');
            $tom->save();

            Session::flash('message', $request->old($tom->name).' is updated');
            return redirect('toms');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tom = Tom::find($id);
        $tom->delete();

        Session::flash('message', "Tom is deleted successfully");
        return redirect('toms');
    }
}
