<?php

/**
 * Main Controller for Admin
 */

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * __construct function for authantication
     */
    public function __construct(){
        $this->middleware([
            'auth',
            'admin'
        ]);
    }

    /**
     * index function
     *
     * @param Request $req
     * @return void
     * 
     * Search will apply on Name of the Pirates
     */
    public function index(Request $req)
    {
        if($req->query('search')){
            $shows=Show::where('name','LIKE','%'.$req->search."%")->latest()->simplePaginate(10);
        }else{
        $shows = Show::latest()->simplePaginate(10);
        }
        return view('/admin/index', compact('shows'));
    }

    /**
     * Create & Store Function is use to add a new Pirate in the List
     */

    public function create()
    {
        return view('/admin/create');
    }
    public function store(Request $request)
    {

        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image'
        ]);
        if($request->file('image')) {
            $path =  $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.png') ;

        Show::create($valid);

        session()->flash('success', 'Character successfully created!');
        
        return redirect('/admin');


        /**
         * edit & update function 
         * 
         * Use to edit Data nad change Image 
         * Display Flash message on success
         * 
         */

    }
    public function edit(Show $show)
   
    {
        return view('admin/edit', compact('show'));
    }
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image'
        ]);

        if($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $show = Show::find($valid['id']);

        $valid['image'] = basename($path ?? $show->image);

        $show->update($valid);

        if($show->save()) {
            session()->flash('success', 'Character was successfully updated'); 
        } else {
            session()->flash('error', 'There was a problem updating the Character');
        }
        return redirect('/admin');

    }

    /**
     * Delete or Destroy function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     * 
     * Use to Delete Record
     */
    public function destroy(Request $request, $id)
    {
        $show = Show::find($id);
        if($show->delete()) {
            session()->flash('success', 'Character was deleted');
            return redirect('/admin');
        }
        session()->flash('error', 'There was a problem deleting the character');
        return redirect('/admin');
        
    }
    
}