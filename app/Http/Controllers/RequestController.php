<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FunctionController $FunctionController)
    {
        $this->middleware('auth');
        $this->FunctionController = $FunctionController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('pages.request.indexRequest', [
            'request' => ModelsRequest::all(),
        ]);
    }

    public function create()
    {
        $code = "EQ-" . str_pad($this->FunctionController->getRandom('request'), 5, '0', STR_PAD_LEFT);
        return view('pages.request.createRequest', [
            'code' => $code
        ]);
    }

    public function store(Request $req)
    {
        Validator::make($req->all(), [
            'code' => 'required',
            'name' => 'required',
            'brand' => 'required',
            'price_acq' => 'required',
            'date_acq' => 'required|date',
            'qty' => 'required',
            'condition' => 'required',
            'room' => 'required',
            'img.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|nullable',
        ])->validate();

        ModelsRequest::create([
            'code' => $req->code,
            'name' => $req->name,
            'brand' => $req->brand,
            'date_acq' => $req->date_acq,
            'info' => $req->info,
            'location' => $req->room,
            'edit' => 0,
            'del' => 0
        ]);

        Redirect::route('request.index');
    }

    public function edit($id)
    {
        $request = ModelsRequest::find($id);
        return view('pages.request.updateRequest', [
            'request' => $request,
        ]);
    }

    public function update($id, Request $req)
    {
        Validator::make($req->all(), [
            'name' => 'required',
            'brand' => 'required',
            'price_acq' => 'required',
            'date_acq' => 'required|date',
            'qty' => 'required',
            'condition' => 'required',
            'room' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
        ])->validate();

        // Initiation
        $request = ModelsRequest::find($id);

        $request->name = $req->name;
        $request->brand = $req->brand;
        $request->date_acq = $req->date_acq;
        $request->location = $req->room;
        $request->info = $req->info;
        $request->add = 0;
        $request->del = 0;
        $request->save();
        return Redirect::route('request.index')
            ->with([
                'status' => 'Data anda berhasil diubah, 
                silahkan menunggu atau melihat status data Anda di halaman persetujuan.'
            ]);
    }

    public function destroy($id)
    {
        $request = ModelsRequest::find($id);
        $request->delete();
        return Redirect::route('request.index')
            ->with(['status' => 'Data dengan kode item ' . $request->code .
                __(' berhasil dihapus')]);
    }

    public function show($id)
    {
        $request = ModelsRequest::find($id);
        return view('pages.request.showRequest', [
            'request' => $request
        ]);
    }
}
