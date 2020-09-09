<?php

namespace App\Http\Controllers;

use App\Services\Stepservice;
use App\Step;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\MessageBag;
use Illuminate\View\View;

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
     * Show the form for editing the specified resource.
     *
     * @param Step $step
     * @return Application|Factory|View
     */
    public function edit(Step $step)
    {
        $hidePanelHeader = true;
        return view('steps.form', compact('step', 'hidePanelHeader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Step  $step
     * @return RedirectResponse
     */
    public function update(Request $request, Step $step)
    {
        $updated = $this->stepService->update($step, $request);

        $redirect = redirect()->route('items.workflow', ['item' => $step->item->id]);

        return $updated
            ? $redirect->with('success', 'Etapa atualizada com sucesso')
            : $redirect->with('errors', new MessageBag([
                'Não é permitido editar o item se as etapas anteriores não forem cumpridas'
            ]));
    }
}
