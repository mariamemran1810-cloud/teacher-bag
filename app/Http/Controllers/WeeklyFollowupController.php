<?php

namespace App\Http\Controllers;

use App\Models\WeeklyFollowup;
use Illuminate\Http\Request;

class WeeklyFollowupController extends Controller
{
    public function index()
    {
        return response()->json(WeeklyFollowup::all());
    }

    public function store(Request $request)
    {
        return response()->json(WeeklyFollowup::create($request->all()), 201);
    }

    public function show(WeeklyFollowup $weeklyfollowup)
    {
        return response()->json($weeklyfollowup);
    }

    public function update(Request $request, WeeklyFollowup $weeklyfollowup)
    {
        $weeklyfollowup->update($request->all());
        return response()->json($weeklyfollowup);
    }

    public function destroy(WeeklyFollowup $weeklyfollowup)
    {
        $weeklyfollowup->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
