<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Http\Requests\TestCreate;
use App\Http\Requests\TestUpdate;

class TestController extends Controller
{
    private $columns = ['name', 'description'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = test::withTrashed()->get();
        return view('example.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return   view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestCreate $request)
    {
        // $data = $this->validate(
        //     request(),
        //     [
        //         'name' => 'required | string ',
        //         'description' => 'required | string',
        //     ]
        // );


        // dd($request->validated());
        // $data = $request->validate(
        //     [
        //         'name' => 'required | string ',
        //         'description' => 'required | string',
        //         'show' => 'required | in:1,0',
        //         'status' => 'required | in:enable,disable'


        //     ],
        //     [],
        //     [
        //         "name" => "title",
        //         "description" => "Description Data",
        //         'show' => 'show Data',
        //         'status' => 'Status Data'

        //     ]
        // );



        // dd($request->name, $request->content);
        // dd($request->only('name', 'description'));

        // test::create($request->only($this->columns));




        test::create($request->validated());
        return redirect('example');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = test::find($id);
        return view('example.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $test = test::find($id);
        return view('example.edit', compact('test'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(TestUpdate $request, string $id)
    {

        // $data = $request->validate(
        //     [
        //         'name' => 'required | string ',
        //         'description' => 'required | string',
        //         'show' => 'required | in:1,0',
        //         'status' => 'required | in:enable,disable'


        //     ],
        //     [],
        //     [
        //         "name" => "title",
        //         "description" => "Description Data",
        //         'show' => 'show Data',
        //         'status' => 'Status Data'

        //     ]
        // );


        // dd($request->only($this->columns));
        test::where('id', $id)->update($request->validated());
        return redirect('example');



        // test::where('id', $id)->update($request->only($this->columns));
        // return redirect('example');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $test = test::find($id);
        // $test->delete();
        test::where('id', $id)->delete();
        return redirect('example');
    }
    public function restore(string $id)
    {
        test::where('id', $id)->restore();
        return redirect('example');
    }
    public function forceDelete(string $id)
    {
        test::where('id', $id)->forceDelete();
        return redirect('example');
    }
}
