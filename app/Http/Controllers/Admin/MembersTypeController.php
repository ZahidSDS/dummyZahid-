<?php

namespace App\Http\Controllers\Admin;

use App\Mtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMtypesRequest;
use App\Http\Requests\Admin\UpdateMtypesRequest;

class MembersTypeController extends Controller
{
    /**
     * Display a listing of Mtype.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('mtype_access')) {
            return abort(401);
        }

        $mtypes = Mtype::all();

        return view('admin.mtypes.index', compact('mtypes'));
    }

    /**
     * Show the form for creating new Mtype.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('mtype_create')) {
            return abort(401);
        }
        return view('admin.mtypes.create');
    }

    /**
     * Store a newly created Mtype in storage.
     *
     * @param  \App\Http\Requests\StoreMtypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMtypesRequest $request)
    {
        if (! Gate::allows('mtype_create')) {
            return abort(401);
        }
        $mtype = Mtype::create($request->all());



        return redirect()->route('admin.mtypes.index');
    }


    /**
     * Show the form for editing Mtype.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('mtype_edit')) {
            return abort(401);
        }
        $mtype = Mtype::findOrFail($id);

        return view('admin.mtypes.edit', compact('mtype'));
    }

    /**
     * Update Mtype in storage.
     *
     * @param  \App\Http\Requests\UpdateMtypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMtypesRequest $request, $id)
    {
        if (! Gate::allows('mtype_edit')) {
            return abort(401);
        }
        $mtype = Mtype::findOrFail($id);
        $mtype->update($request->all());



        return redirect()->route('admin.mtypes.index');
    }


    /**
     * Display Mtype.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('mtype_view')) {
            return abort(401);
        }
        $clients = \App\Client::where('mtype_id', $id)->get();
        $mtype = Mtype::findOrFail($id);

        return view('admin.mtypes.show', compact('mtype', 'clients'));
    }


    /**
     * Remove Mtype from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('mtype_delete')) {
            return abort(401);
        }
        $mtype = Mtype::findOrFail($id);
        $mtype->delete();

        return redirect()->route('admin.mtypes.index');
    }

    /**
     * Delete all selected Mtype at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('mtype_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Mtype::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
