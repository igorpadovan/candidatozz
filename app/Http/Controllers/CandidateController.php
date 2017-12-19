<?php
namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $candidates = Candidate::all();
        return response()->json($candidates);
    }

    public function getCandidate($id)
    {
        $candidate = Candidate::find($id);
        return response()->json($candidate);
    }

    public function createCandidate(Request $request)
    {
        $Book = Candidate::create($request->all());

        return response()->json($Book);

    }

    public function updateCandidate()
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->name = $request->input('name');
        $candidate->phone = $request->input('phone');
        $candidate->city = $request->input('city');
        $candidate->state = $request->input('state');
        $candidate->save();

        return response()->json($candidate);
    }

    public function deleteCandidate($id)
    {
        $candidate  = Candidate::find($id);
        if (!empty($candidate)) {
            $candidate->delete();
        }

        return response()->json('deleted');
    }
}
