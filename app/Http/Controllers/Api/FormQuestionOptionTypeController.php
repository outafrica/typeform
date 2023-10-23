<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FormQuestionOptionType\FormQuestionOptionTypeResource;
use App\Models\FormQuestionOptionType;
use Illuminate\Http\Request;

class FormQuestionOptionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FormQuestionOptionType::all();

        $response = array(
            'status' => 200,
            'data' => FormQuestionOptionTypeResource::collection($data),
        );

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FormQuestionOptionType $formQuestionOptionType)
    {
        $response = array(
            'status' => 200,
            'data' => new FormQuestionOptionTypeResource($formQuestionOptionType),
        );
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormQuestionOptionType $formQuestionOptionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormQuestionOptionType $formQuestionOptionType)
    {
        //
    }
}
