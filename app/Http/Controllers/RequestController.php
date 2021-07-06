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
        $code = "PH-" . str_pad($this->FunctionController->getRandom('request'), 5, '0', STR_PAD_LEFT);
        return view('pages.request.createRequest', [
            'code' => $code
        ]);
    }

    public function store(Request $req)
    {
        // Validator::make($req->all(), [
        //     'code' => 'required',
        //         'name' => 'required',
        //         'tmpt_lahir' => 'required',
        //         'due' => 'required|date',
        //         'jns_klamin' => 'required',
        //         'no_tlp' => 'required',
        //         'no_orgdkt' => 'required',
        //         'stts_kawin' => 'required',
        //         'thn_kawin' => 'required',
        //         'address' => 'required',
        //         'rtrw' => 'required',
        //         'kel' => 'required',
        //         'kec' => 'required',
        //         'kab' => 'required',
        //         'kode_pos' => 'required',
        //         'prov' => 'required',
        //         'domisili' => 'required',
        //         'dom_rtrw' => 'required',
        //         'dom_kel' => 'required',
        //         'dom_kec' => 'required',
        //         'dom_kab' => 'required',
        //         'dom_prov' => 'required',
        //         'stts_rmhtgl' => 'required',
        //         'pend_trakhir' => 'required',
        //         'pkerjaan' => 'required',
        //         'prusahaan' => 'required',
        //         'jabatan' => 'required',
        //         'almt_prshaan' => 'required',
        //         'ikut_tgjwb' => 'required',
        //         'stts_hub' => 'required',
        //         'no_prusahaan' => 'required',
        //         'tg_kluarga' => 'required',
        //         'pendapatan' => 'required',
        //         'ket_pendapatan' => 'required',
        //         'jml_pngajuan' => 'required',
        //         'terbilang' => 'required',
        //         'jml_disetujui' => 'required',
        //         'keperluan' => 'required',
        //         'jngka_wkt' => 'required',
        //         'akad_pemb' => 'required',
        // ])->validate();

        ModelsRequest::create([
            'code' => $req->code,
                'name' => $req->name,
                'tmpt_lahir' => $req->tmpt_lahir,
                'due' => $req->due,
                'jns_klamin' => $req->jns_klamin,
                'no_tlp' => $req->no_tlp,
                'no_orgdkt' => $req->no_orgdkt,
                'stts_kawin' => $req->stts_kawin,
                'thn_kawin' => $req->thn_kawin,
                'address' => $req->address,
                'rtrw' => $req->rtrw,
                'kel' => $req->kel,
                'kec' => $req->kec,
                'kab' => $req->kab,
                'kode_pos' => $req->kode_pos,
                'prov' => $req->prov,
                'domisili' => $req->domisili,
                'dom_rtrw' => $req->dom_rtrw,
                'dom_kel' => $req->dom_kel,
                'dom_kec' => $req->dom_kec,
                'dom_kab' => $req->dom_kab,
                'dom_prov' => $req->dom_prov,
                'stts_rmhtgl' => $req->stts_rmhtgl,
                'rmhtgl_lain' => $req->rmhtgl_lain,
                'pend_trakhir' => $req->pend_trakhir,
                'pend_lain' => $req->pend_lain,
                'pkerjaan' => $req->pkerjaan,
                'prusahaan' => $req->prusahaan,
                'jabatan' => $req->jabatan,
                'almt_prshaan' => $req->almt_prshaan,
                'ikut_tgjwb' => $req->ikut_tgjwb,
                'stts_hub' => $req->stts_hub,
                'no_prusahaan' => $req->no_prusahaan,
                'tg_kluarga' => $req->tg_kluarga,
                'pendapatan' => $req->pendapatan,
                'ket_pendapatan' => $req->ket_pendapatan,
                'jml_pngajuan' => $req->jml_pngajuan,
                'terbilang' => $req->terbilang,
                'jml_disetujui' => $req->jml_disetujui,
                'jml_disetujui2' => $req->jml_disetujui2,
                'jml_disetujui3' => $req->jml_disetujui3,
                'jml_disetujui4' => $req->jml_disetujui4,
                'keperluan' => $req->keperluan,
                'jngka_wkt' => $req->jngka_wkt,
                'akad_pemb' => $req->akad_pemb,
                'info' => $req->info,
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
        // Validator::make($req->all(), [
        //     'code' => $req->code,
        //         'name' => $req->name,
        //         'tmpt_lahir' => $req->tmpt_lahir,
        //         'due' => $req->due,
        //         'jns_klamin' => $req->jns_klamin,
        //         'no_tlp' => $req->no_tlp,
        //         'no_orgdkt' => $req->no_orgdkt,
        //         'stts_kawin' => $req->stts_kawin,
        //         'thn_kawin' => $req->thn_kawin,
        //         'address' => $req->address,
        //         'rtrw' => $req->rtrw,
        //         'kel' => $req->kel,
        //         'kec' => $req->kec,
        //         'kab' => $req->kab,
        //         'kode_pos' => $req->kode_pos,
        //         'prov' => $req->prov,
        //         'domisili' => $req->domisili,
        //         'dom_rtrw' => $req->dom_rtrw,
        //         'dom_kel' => $req->dom_kel,
        //         'dom_kec' => $req->dom_kec,
        //         'dom_kab' => $req->dom_kab,
        //         'dom_prov' => $req->dom_prov,
        //         'stts_rmhtgl' => $req->stts_rmhtgl,
        //         'rmhtgl_lain' => $req->rmhtgl_lain,
        //         'pend_trakhir' => $req->pend_trakhir,
        //         'pend_lain' => $req->pend_lain,
        //         'pkerjaan' => $req->pkerjaan,
        //         'prusahaan' => $req->prusahaan,
        //         'jabatan' => $req->jabatan,
        //         'almt_prshaan' => $req->almt_prshaan,
        //         'ikut_tgjwb' => $req->ikut_tgjwb,
        //         'stts_hub' => $req->stts_hub,
        //         'no_prusahaan' => $req->no_prusahaan,
        //         'tg_kluarga' => $req->tg_kluarga,
        //         'pendapatan' => $req->pendapatan,
        //         'ket_pendapatan' => $req->ket_pendapatan,
        //         'jml_pngajuan' => $req->jml_pngajuan,
        //         'terbilang' => $req->terbilang,
        //         'jml_disetujui' => $req->jml_disetujui,
        //         'jml_disetujui2' => $req->jml_disetujui2,
        //         'jml_disetujui3' => $req->jml_disetujui3,
        //         'jml_disetujui4' => $req->jml_disetujui4,
        //         'keperluan' => $req->keperluan,
        //         'jngka_wkt' => $req->jngka_wkt,
        //         'akad_pemb' => $req->akad_pemb,
        //         'info' => $req->info
        // ])->validate();

        // Initiation
        $request = ModelsRequest::find($id);

        $request->name = $req->name;
        $request->tmpt_lahir = $req->tmpt_lahir;
        $request->due = $req->due;
        $request->jns_klamin = $req->jns_klamin;
        $request->no_tlp = $req->no_tlp;
        $request->no_orgdkt = $req->no_orgdkt;
        $request->stts_kawin = $req->stts_kawin;
        $request->thn_kawin = $req->thn_kawin;
        $request->address = $req->address;
        $request->rtrw = $req->rtrw;
        $request->kel = $req->kel;
        $request->kec = $req->kec;
        $request->kab = $req->kab;
        $request->kode_pos = $req->kode_pos;
        $request->prov = $req->prov;
        $request->domisili = $req->domisili;
        $request->dom_rtrw = $req->dom_rtrw;
        $request->dom_kel = $req->dom_kel;
        $request->dom_kec = $req->dom_kec;
        $request->dom_kab = $req->dom_kab;
        $request->dom_prov = $req->dom_prov;
        $request->stts_rmhtgl = $req->stts_rmhtgl;
        $request->rmhtgl_lain = $req->rmhtgl_lain;
        $request->pend_trakhir = $req->pend_trakhir;
        $request->pend_lain = $req->pend_lain;
        $request->pkerjaan = $req->pkerjaan;
        $request->prusahaan = $req->prusahaan;
        $request->jabatan = $req->jabatan;
        $request->almt_prshaan = $req->almt_prshaan;
        $request->ikut_tgjwb = $req->ikut_tgjwb;
        $request->stts_hub = $req->stts_hub;
        $request->no_prusahaan = $req->no_prusahaan;
        $request->tg_kluarga = $req->tg_kluarga;
        $request->pendapatan = $req->pendapatan;
        $request->ket_pendapatan = $req->ket_pendapatan;
        $request->jml_pngajuan = $req->jml_pngajuan;
        $request->terbilang = $req->terbilang;
        $request->jml_disetujui = $req->jml_disetujui;
        $request->jml_disetujui2 = $req->jml_disetujui2;
        $request->jml_disetujui3 = $req->jml_disetujui3;
        $request->jml_disetujui4 = $req->jml_disetujui4;
        $request->keperluan = $req->keperluan;
        $request->jngka_wkt = $req->jngka_wkt;
        $request->akad_pemb = $req->akad_pemb;
        $request->info = $req->info;
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
