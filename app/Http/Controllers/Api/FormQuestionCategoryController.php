<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FormQuestionCategory\FormQuestionCategoryResource;
use App\Models\FormQuestionCategory;
use Illuminate\Http\Request;

class FormQuestionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FormQuestionCategory::all();

        $response = array(
            'status' => 200,
            'data' => FormQuestionCategoryResource::collection($data),
        );

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(FormQuestionCategory $formQuestionCategory)
    {
        $response = array(
            'status' => 200,
            'data' => new FormQuestionCategoryResource($formQuestionCategory),
        );
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormQuestionCategory $formQuestionCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormQuestionCategory $formQuestionCategory)
    {
        //
    }
}
