<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'bio' => 'required',
        ]);

        $data = new Listing();
        $data->user_id = Auth::id();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->website = $request->input('website');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bio = $request->input('bio');
        $data->save();
        return redirect('/home')->with('success','Listing Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Listing::find($id);
        return view('pages.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Listing::find($id);
        return view('pages.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'bio' => 'required',
        ]);

        $data = Listing::Find($id);
        $data->user_id = Auth::id();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->website = $request->input('website');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bio = $request->input('bio');
        $data->save();
        return redirect('/home')->with('success','Listing Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Listing::Find($id);
        $data->delete();
        return redirect('/home')->with('success','Lisiting Deleted Successfully.!');
    }
}
