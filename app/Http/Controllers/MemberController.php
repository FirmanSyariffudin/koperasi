<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
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
        return view('pages.member.indexMember', [
            'member' => Member::all(),
        ]);
    }

    public function create()
    {
        $code = "AG-" . str_pad($this->FunctionController->getRandom('member'), 5, '0', STR_PAD_LEFT);
        return view('pages.member.createMember', ['code' => $code]);
    }

    public function store(Request $req)
    {
        Validator::make($req->all(), [
            'code' => 'required',
            'name' => 'required',
            'tlahir' => 'required',
            'tgllahir' => 'required|date',
            'jnsklmn' => 'required',
            'noktp' => 'required',
            'bnoktp' => 'required',
            'agama' => 'required',
            'ibukandung' => 'required',
            'notlp' => 'required',
            'statuskawin' => 'required',
            'address' => 'required',
            'rtrw' => 'required',
            'kel' => 'required',
            'kec' => 'required',
            'kab' => 'required',
            'kodepos' => 'required',
            'prov' => 'required',
            'domisili' => 'required',
            'dom_rtrw' => 'required',
            'dom_kel' => 'required',
            'dom_kec' => 'required',
            'dom_kab' => 'required',
            'dom_prov' => 'required',
            'stts_tmpttgl' => 'required',
            'pend_terakhir' => 'required',
            'pend_terakhir_thn' => 'required',
            'pkrjaan' => 'required',
            'gaji_perbulan' => 'required',
            'jns_prmohn' => 'required',
            'nom_tab' => 'required',
            'nom_tab_per' => 'required',
            'nom_tab_terbilang' => 'required',
        ])->validate();

        // dd($req->jnsklmn);

        Member::create([
            'code' => $req->code,
            'name' => $req->name,
            'tlahir' => $req->tlahir,
            'tgllahir' => $req->tgllahir,
            'jnsklmn' => $req->jnsklmn,
            'noktp' => $req->noktp,
            'bnoktp' => $req->bnoktp,
            'agama' => $req->agama,
            'ibukandung' => $req->ibukandung,
            'notlp' => $req->notlp,
            'statuskawin' => $req->statuskawin,
            'thnstatuskawin' => $req->thnstatuskawin,
            'address' => $req->address,
            'rtrw' => $req->rtrw,
            'kel' => $req->kel,
            'kec' => $req->kec,
            'kab' => $req->kab,
            'kodepos' => $req->kodepos,
            'prov' => $req->prov,
            'domisili' => $req->domisili,
            'dom_rtrw' => $req->dom_rtrw,
            'dom_kel' => $req->dom_kel,
            'dom_kec' => $req->dom_kec,
            'dom_kab' => $req->dom_kab,
            'dom_prov' => $req->dom_prov,
            'stts_tmpttgl' => $req->stts_tmpttgl,
            'stts_tmpttgl_lain' => $req->stts_tmpttgl_lain,
            'pend_terakhir' => $req->pend_terakhir,
            'pend_terakhir_thn' => $req->pend_terakhir_thn,
            'pkrjaan' => $req->pkrjaan,
            'gaji_perbulan' => $req->gaji_perbulan,
            'jns_prmohn' => $req->jns_prmohn,
            'nom_tab' => $req->nom_tab,
            'nom_tab_per' => $req->nom_tab_per,
            'nom_tab_terbilang' => $req->nom_tab_terbilang,
            'info' => $req->info,
        ]);

        return Redirect::route('member.index');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('pages.member.updateMember', [
            'member' => $member
        ]);
    }

    public function update($id, Request $req)
    {
        // Validator::make($req->all(), [
        //     'name' => 'required',
        //     'address' => 'required',
        //     'status' => 'required',
        //     'pln' => 'required',
        //     'pdam' => 'required',
        //     'pbb' => 'required',
        //     'wifi' => 'required',
        //     'rental' => 'required',
        //     'due' => 'required|date',
        // ])->validate();

        // Initiation
        $member = Member::find($id);

        $member->name = $req->name;
        $member->tlahir = $req->tlahir;
        $member->tgllahir = $req->tgllahir;
        $member->jnsklmn = $req->jnsklmn;
        $member->noktp = $req->noktp;
        $member->bnoktp = $req->bnoktp;
        $member->agama = $req->agama;
        $member->ibukandung = $req->ibukandung;
        $member->notlp = $req->notlp;
        $member->statuskawin = $req->statuskawin;
        $member->thnstatuskawin = $req->thnstatuskawin;
        $member->address = $req->address;
        $member->rtrw = $req->rtrw;
        $member->kel = $req->kel;
        $member->kec = $req->kec;
        $member->kab = $req->kab;
        $member->kodepos = $req->kodepos;
        $member->prov = $req->prov;
        $member->domisili = $req->domisili;
        $member->dom_rtrw = $req->dom_rtrw;
        $member->dom_kel = $req->dom_kel;
        $member->dom_kec = $req->dom_kec;
        $member->dom_kab = $req->dom_kab;
        $member->dom_prov = $req->dom_prov;
        $member->stts_tmpttgl = $req->stts_tmpttgl;
        $member->stts_tmpttgl_lain = $req->stts_tmpttgl_lain;
        $member->pend_terakhir = $req->pend_terakhir;
        $member->pend_terakhir_thn = $req->pend_terakhir_thn;
        $member->pkrjaan = $req->pkrjaan;
        $member->gaji_perbulan = $req->gaji_perbulan;
        $member->jns_prmohn = $req->jns_prmohn;
        $member->nom_tab = $req->nom_tab;
        $member->nom_tab_per = $req->nom_tab_per;
        $member->nom_tab_terbilang = $req->nom_tab_terbilang;
        $member->info = $req->info;
        $member->save();
        return Redirect::route('member.index')->with([
            'status' => 'Data anda berhasil diubah, 
            silahkan menunggu atau melihat status data Anda di halaman persetujuan.'
        ]);
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return Redirect::route('member.index')
            ->with(['status' => 'Data dengan kode item ' . $member->code .
                __(' berhasil dihapus')]);
    }

    public function show($id)
    {
        $member = Member::find($id);
        // dd($member->nom_tab);
        return view('pages.member.showMember', ['member' => $member]);
    }
}
