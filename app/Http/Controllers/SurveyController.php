<?php

namespace App\Http\Controllers;

use App\Models\survey;
use App\Http\Requests\StoresurveyRequest;
use App\Http\Requests\UpdatesurveyRequest;
use App\Http\Resources\surveyResource;
use Symfony\Component\HttpFoundation\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
     $user = $request->user();
         return surveyResource::collection(
             survey::where('user_id',$user->id)
            ->orderBy('created_at','desc')->paginate(10));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresurveyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesurveyRequest $request, survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(survey $survey)
    {
        //
    }
}