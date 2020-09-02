<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Item;
use App\Project;
use App\Services\ItemsService;
use App\Status;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class ItemsController
 * @package App\Http\Controllers
 */
class ItemsController extends Controller
{

    /**
     * @var ItemsService
     */
    private ItemsService $itemsService;

    /**
     * ItemsController constructor.
     * @param ItemsService $itemsService
     */
    public function __construct(ItemsService $itemsService)
    {
        $this->itemsService = $itemsService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $items = $this->itemsService->all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $statuses = Status::all();
        $projects = Project::all();
        return view('items.form', compact('statuses', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ItemRequest $request
     * @return RedirectResponse
     */
    public function store(ItemRequest $request)
    {
        $this->itemsService->create($request->validated());
        return redirect()->back()->with('success', 'Item criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     * @return Application|Factory|Response|View
     */
    public function show(Item $item)
    {
        $statuses = Status::all();
        $projects = Project::all();
        return view('items.form', compact('statuses', 'projects', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return Application|Factory|Response|View
     */
    public function edit(Item $item)
    {
        $statuses = Status::all();
        $projects = Project::all();
        return view('items.form', compact('item', 'statuses', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ItemRequest $request
     * @param Item $item
     * @return RedirectResponse
     */
    public function update(ItemRequest $request, Item $item)
    {
        $this->itemsService->update($item, $request->validated());
        return redirect()->back()->with('success', 'Item atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Item $item)
    {
        $this->itemsService->delete($item);
        return redirect()->back()->with('success', 'Item deletado com sucesso');
    }

    /**
     * View Item's workflow
     * @param Item $item
     * @return Application|Factory|View
     */
    public function viewWorkflow(Item $item)
    {
        $hidePanelHeader = true;
        return view('workflow.index', compact('item', 'hidePanelHeader'));
    }
}
