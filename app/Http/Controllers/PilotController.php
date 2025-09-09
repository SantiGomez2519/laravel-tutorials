<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use App\Http\Requests\StorePilotRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PilotController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $pilots = Pilot::orderBy('nitro_level', 'asc')->get();
        $viewData['pilots'] = $pilots;

        return view('pilot.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        return view('pilot.create');
    }

    public function store(StorePilotRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Pilot::create($validated);

        return redirect()->route('pilot.index')->with('success', 'Pilot registered successfully');
    }

    public function stats(): View
    {
        $viewData = [];
        $countLA = Pilot::where('city', 'LA')->count();
        $countTokio = Pilot::where('city', 'Tokio')->count();
        $avgNitro = Pilot::avg('nitro_level');

        $viewData['countLA'] = $countLA;
        $viewData['countTokio'] = $countTokio;
        $viewData['avgNitro'] = $avgNitro;

        return view('pilot.stats')->with('viewData', $viewData);
    }
}


