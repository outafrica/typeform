<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormQuestionOption\FormQuestionOptionRequest;
use App\Http\Resources\FormQuestionOption\FormQuestionOptionResource;
use App\Models\FormQuestionOption;
use Illuminate\Http\Request;

class FormQuestionOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = array(
            'status' => 200,
            'data' => FormQuestionOptionResource::collection(FormQuestionOption::all()),
        );

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormQuestionOptionRequest $request)
    {
        $option = FormQuestionOption::create($request->validated());

        $response = array(
            'status' => 200,
            'data' => new FormQuestionOptionResource($option),
        );

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormQuestionOption $formQuestionOption)
    {
        $response = array(
            'status' => 200,
            'data' => new FormQuestionOptionResource($formQuestionOption),
        );
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormQuestionOptionRequest $request, FormQuestionOption $formQuestionOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormQuestionOption $formQuestionOption)
    {
        //
    }
}
