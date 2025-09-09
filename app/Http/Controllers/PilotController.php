<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePilotRequest;
use App\Models\Pilot;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PilotController extends Controller
{
    public function home(): View
    {
        return view('pilot.home');
    }

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
