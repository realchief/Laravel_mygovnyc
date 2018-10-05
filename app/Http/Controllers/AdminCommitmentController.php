<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Commitments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class AdminCommitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $commitments = Commitments::leftJoin('agencies', 'commitments.managingagency', '=', 'agency_recordid')->select('commitments.*', 'agencies.magency')->leftJoin('projects', 'commitments.projectid', '=', 'projects.project_recordid')->select('commitments.*', 'agencies.magency', 'projects.project_projectid')->orderBy('commitments.id')->paginate(15);
        $commitments = Commitments::paginate(15);
        return view('admin.tables.commitment')->with('commitments', $commitments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commitment = Commitments::where('id', '=', $id)->first();
        return response()->json($commitment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $commitment = Commitments::find($id);
        // $project = Project::where('id', '=', $id)->first();
        $commitment->budgetline = $request->budgetline;
        $commitment->fmsnumber = $request->fmsnumber;
        $commitment->description = $request->description;
        $commitment->commitmentcode = $request->commitmentcode;
        $commitment->commitmentdescription = $request->commitmentdescription;
        $commitment->citycost = $request->citycost;
        $commitment->noncitycost = $request->noncitycost;
        $commitment->flag = 'modified';
        $commitment->save();
        // var_dump($project);
        // exit();
        return response()->json($commitment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
