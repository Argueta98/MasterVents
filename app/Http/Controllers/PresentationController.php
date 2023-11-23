<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;

/**
 * Class PresentationController
 * @package App\Http\Controllers
 */
class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = Presentation::paginate(10);

        return view('presentation.index', compact('presentations'))
            ->with('i', (request()->input('page', 1) - 1) * $presentations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presentation = new Presentation();
        return view('presentation.create', compact('presentation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Presentation::$rules);

        $presentation = Presentation::create($request->all());

        return redirect()->route('presentations.index')
            ->with('success', 'Presentation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presentation = Presentation::find($id);

        return view('presentation.show', compact('presentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentation = Presentation::find($id);

        return view('presentation.edit', compact('presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Presentation $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentation $presentation)
    {
        request()->validate(Presentation::$rules);

        $presentation->update($request->all());

        return redirect()->route('presentations.index')
            ->with('success', 'Presentation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $presentation = Presentation::find($id)->delete();

        return redirect()->route('presentations.index')
            ->with('success', 'Presentation deleted successfully');
    }
}
