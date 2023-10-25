<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\CreateFormReuest;
use App\Http\Resources\Form\FormResource;
use App\Models\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($all = null)
    {
        $response = array();

        if ($all != null) {
            $data = Form::all();

            $response = array(
                'status' => 200,
                'data' => FormResource::collection($data),
            );
        } else {
            $data = Form::where('is_approved', 1)->get();

            $response = array(
                'status' => 200,
                'data' => FormResource::collection($data),
            );
        }

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateFormReuest $request)
    {
        $form = Form::create($request->validated());

        $response = array(
            'status' => 200,
            'data' => new FormResource($form),
        );

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        $response = array(
            'status' => 200,
            'data' => new FormResource($form),
        );
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateFormReuest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
