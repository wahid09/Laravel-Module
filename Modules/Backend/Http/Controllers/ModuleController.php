<?php

namespace Modules\Backend\Http\Controllers;

use Modules\Backend\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Module;
use Illuminate\Support\Str;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $moduleList = Module::all();
        return view('backend::module.index', compact('moduleList'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('backend::module.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //return $request;
        $this->validate($request, [
            //'name' => 'required|string|min:3|max:12|unique:modules,name',
            'name'  => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','min:3', 'max:12', 'unique:modules,name'],
            'name_bn'=>['nullable', 'min:3', 'max:12'],
            'description'=>['nullable', 'min:3', 'max:1200'],
            'description_bn'=>['nullable', 'min:3', 'max:1200'],
        ]);

        $slug = Str::slug($request->input('name'));

        $module = Module::create([
            'name'=>$request->name,
            'name_bn'=>$request->name_bn,
            'slug'=>$slug,
            'description'=>$request->description,
            'description_bn'=>$request->description_bn,
            'status'=>$request->filled('status')
        ]);

        if($module){
            \Artisan::call('module:make'.' '.$request->name);
            toast('Module has been created successfully','success');
            return redirect()->route('module.index'); 

        }else{
            toast('Something went wrong','warning');
            return redirect()->route('module.index'); 
        }


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(module $module)
    {
        return view('backend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(module $module)
    {
        return view('backend::module.form', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(module $module)
    {
        $module->delete();
        toast('Module Deleted','Success');
        return back();
    }
}
