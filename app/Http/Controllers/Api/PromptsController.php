<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromptRequest;
use Illuminate\Http\Request;
use App\Models\prompts;


class PromptsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return prompts::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(PromptRequest $request)
    {
        $validated = $request->validated();

        $prompt = prompts::create($validated);

        return $prompt;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return prompts::findOrfail($id);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prompt = prompts::findOrFail($id);

        $prompt->delete();

        return $prompt;
    }
}
