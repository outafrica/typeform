<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormQuestion\FormQuestionRequest;
use App\Http\Resources\FormQuestion\FormQuestionResource;
use App\Models\FormQuestion;
use Illuminate\Http\Request;

class FormQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FormQuestion::where('is_approved', 1)->get();
        $response = array(
            'status' => 200,
            'data' => FormQuestionResource::collection($data),
        );

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormQuestionRequest $request)
    {
        $formQuestion = FormQuestion::create($request->validated());

        $response = array(
            'status' => 200,
            'data' => new FormQuestionResource($formQuestion),
        );

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormQuestion $formQuestion)
    {
        $response = array(
            'status' => 200,
            'data' => new FormQuestionResource($formQuestion),
        );

        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormQuestionRequest $request, FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormQuestion $formQuestion)
    {
        //
    }
}
