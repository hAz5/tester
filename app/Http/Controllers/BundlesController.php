<?php

namespace App\Http\Controllers;

use App\Bundle;
use foo\bar;
use Illuminate\Http\Request;

class BundlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bundles = Bundle::all();

        return view('bundles.index', compact($bundles));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bundle = new Bundle();
        $bundle->name = $request->get('name');
        $bundle->dir = $request->get('dir');
        $bundle->status = $request->get('status');
        $bundle->save();

        return response()->json(
            [
                'message' => 'new bundle added',
                'status' => 'OK'
            ]
        )->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\BundleRequest $request
     * @param  \App\Bundle $bundle
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\BundleRequest $request, Bundle $bundle)
    {
        $bundle->name = $request->get('name', $bundle->name);
        $bundle->dir = $request->get('dir', $bundle->dir);
        $bundle->status = $request->get('status', $bundle->status);

        $bundle->save();

        return response()->json(
            [
                'message' => 'bundle edited',
                'status' => 'OK'
            ]
        )->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bundle $bundle
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Bundle $bundle)
    {
        $bundle->delete();

        return response()->json(
            [
                'message' => 'bundle deleted',
                'status' => 'OK'
            ]
        )->setStatusCode(200);
    }
}
