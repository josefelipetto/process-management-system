<?php

namespace App\Http\Controllers;

use App\Services\Stepservice;
use App\Step;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    private Stepservice $stepService;

    /**
     * StepsController constructor.
     * @param Stepservice $stepService
     */
    public function __construct(Stepservice $stepService)
    {
        $this->stepService = $stepService;
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
        //
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
     * @param Step $step
     * @return
     */
    public function edit(Step $step)
    {
        $hidePanelHeader = true;
        return view('steps.form', compact('step', 'hidePanelHeader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Step  $step
     * @return bool
     */
    public function update(Request $request, Step $step)
    {
        $this->stepService->update($step, $request);

        return redirect()->back()->with('success', 'Etapa atualizada com sucesso');
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
