<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = test::all();
        return  view('welcome');
    }

    public function reg(){
        return view('registration');
    }

    public function dashboard(){
        return view('dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'c_password' => 'required',
            'city'=>'required',
            'state'=>'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $test = new test;
        $test->f_name = $request->input('f_name');
        $test->l_name = $request->input('l_name');
        $test->email = $request->input('email');
        $test->password = $request->input('password');
        $test->c_password = $request->input('c_password');
        $test->city = $request->input('city');
        $test->state = $request->input('state');
        $test->phone = $request->input('phone');
        $test->gender = $request->input('gender');
        $test->save();
        $test->session->put('test', $request->input('name'));
        return readdir('welcome');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
