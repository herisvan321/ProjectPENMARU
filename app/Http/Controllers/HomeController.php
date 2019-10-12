<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alurpend;
use App\Brosurpend;
use App\Dterftar;
use App\Fasilitas;
use App\Infopen;
use App\Kemudahan;
use App\Pesanalum;
use App\Prestasi;
use App\Prodidanpeluang;
use App\Slider;
use App\Urlinfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.section.index');
    }

    //=====alur perndaftaran===///
    public function alurpend()
    {
        $tampil = Alurpend::orderBy('id','desc')->get();
        return view('auth.section.alurpend',compact('tampil'));
    }
    public function svalurpend(Request $r)
    {
      if(@count($r->isi) > 0){
        $post = new Alurpend();
        $post->title = $r->title;
        $post->isi = $r->isi;
        $post->status = 'text';
        $post->file = 0;
        $post->active = "Y";
        $post->save();
        return back();
      }
      else {
        $file = $r->file('file');
        //dd($file);
        $ext = $file->getClientOriginalExtension();
        $namafile = date('YmdHsi'). ".$ext";
        $file->move('upload/pdf',$namafile);

        $post = new Alurpend();
        $post->title = $r->title;
        $post->isi = 0;
        $post->status = 'pdf';
        $post->file = $namafile;
        $post->active = "Y";
        $post->save();
        return back();
      }
    }
    public function upalurpend(Request $r,$id)
    {
      $update = Alurpend::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->active = $r->active;
      $update->update();
    }
    public function dlalurpend($id)
    {
      $delete = Alurpend::find($id);
      $delete->delete();
    }
    //==== end alur pebndaftaran==//

    //=== Brosurpend ==//
    public function brosurpend()
    {
        $tampil = Brosurpend::orderBy('id','desc')->get();
        return view('auth.section.brosurpend',compact('tampil'));
    }
    public function svbrosurpend(Request $r)
    {

      $file = $r->file('pdf');
      //dd($file);
      $ext = $file->getClientOriginalExtension();
      $namafile = date('YmdHsi'). ".$ext";
      $file->move('upload/brosurpend',$namafile);

      $post = new Brosurpend();
      $post->title = $r->title;
      $post->isi = $namafile;
      $post->save();
      return back();
    }
    public function upbrosurpend(Request $r,$id)
    {
      $update = Brosurpend::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->update();
    }
    public function dlbrosurpend($id)
    {
      $delete = Brosurpend::find($id);
      $delete->delete();
      return back();
    }
    //==== end Brosurpend==//

    //=== dterftar ==//
    public function dterftar()
    {
        $tampil = Dterftar::orderBy('id','desc')->get();
        return view('auth.section.dterftar',compact('tampil'));
    }
    public function svdterftar(Request $r)
    {
      $post = new Dterftar();
      $post->save();
    }
    public function updterftar(Request $r,$id)
    {
      $update = Dterftar::find($id);
      $update->update();
    }
    public function dldterftar($id)
    {
      $delete = Dterftar::find($id);
      $delete->delete();
    }
    //==== end dterftar==//

    //=== fasilitas ==//
    public function fasilitas()
    {
        $tampil = Fasilitas::orderBy('id','desc')->get();
        return view('auth.section.fasilitas',compact('tampil'));
    }
    public function svfasilitas(Request $r)
    {
      $post = new Fasilitas();
      $post->title = $r->title;
      $post->isi = $r->isi;
      $post->save();
      return back();
    }
    public function upfasilitas(Request $r,$id)
    {
      $update = Fasilitas::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->update();
    }
    public function dlfasilitas($id)
    {
      $delete = Fasilitas::find($id);
      $delete->delete();
    }
    //==== end infopen==//

    //=== infopen ==//
    public function infopen()
    {
        $tampil = Infopen::orderBy('id','desc')->get();
        return view('auth.section.infopen',compact('tampil'));
    }
    public function svinfopen(Request $r)
    {
      $post = new Infopen();
      $post->title = $r->title;
      $post->isi = $r->isi;
      $post->save();
    }
    public function upinfopen(Request $r,$id)
    {
      $update = Infopen::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->update();
    }
    public function dlinfopen($id)
    {
      $delete = Infopen::find($id);
      $delete->delete();
    }
    //==== end infopen==//

    //=== kemudahan ==//
    public function kemudahan()
    {
        $tampil = Kemudahan::orderBy('id','desc')->get();
        return view('auth.section.kemudahan',compact('tampil'));
    }
    public function svkemudahan(Request $r)
    {
      $post = new Kemudahan();
      $post->title = $r->title;
      $post->isi = $r->isi;
      $post->save();
    }
    public function upkemudahan(Request $r,$id)
    {
      $update = Kemudahan::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->update();
    }
    public function dlkemudahan($id)
    {
      $delete = Kemudahan::find($id);
      $delete->delete();
    }
    //==== end kemudahan==//

    //=== pesanalum ==//
    public function pesanalum()
    {
        $tampil = Pesanalum::orderBy('id','desc')->get();
        return view('auth.section.pesanalum',compact('tampil'));
    }
    public function svpesanalum(Request $r)
    {
      if(@count($r->file('foto')) > 0){
      $file = $r->file('foto');
      //dd($file);
      $ext = $file->getClientOriginalExtension();
      $namafile = date('YmdHsi'). ".$ext";
      $file->move('upload/fotoalumni',$namafile);

      $post = new Pesanalum();
      $post->nama = $r->nama;
      $post->pesan = $r->pesan;
      $post->foto = $namafile;
      $post->save();
      return back();
    }else{
      $post = new Pesanalum();
      $post->nama = $r->nama;
      $post->pesan = $r->pesan;
      $post->foto ='index.png';
      $post->save();
      return back();
    }
    }
    public function uppesanalum(Request $r,$id)
    {
      $update = Pesanalum::find($id);
      $update->nama = $r->nama;
      $update->pesan = $r->pesan;
      $update->foto = $post->foto;
      $update->update();
    }
    public function dlpesanalum($id)
    {
      $delete = Pesanalum::find($id);
      $delete->delete();
    }
    //==== end Brosurpend==//

    //=== prestasi ==//
    public function prestasi()
    {
        $tampil = Alurpend::orderBy('id','desc')->first();
        return view('auth.section.prestasi',compact('tampil'));
    }
    public function svprestasi(Request $r)
    {
      $post = new Prestasi();
      $post->title = $r->title;
      $post->isi = $r->isi;
      $post->save();
      return back();
    }
    public function upprestasi(Request $r,$id)
    {
      $update = Prestasi::find($id);
      $update->title = $r->title;
      $update->isi = $r->isi;
      $update->update();
    }
    public function dlprestasi($id)
    {
      $delete = Prestasi::find($id);
      $delete->delete();
    }
    //==== end prestasi==//

    //=== prodidanpeluang ==//
    public function prodidanpeluang()
    {
        $tampil = Prodidanpeluang::orderBy('id','desc')->get();
        return view('auth.section.prodidanpeluang',compact('tampil'));
    }
    public function svprodidanpeluang(Request $r)
    {
      $post = new Prodidanpeluang();
      $post->namaprodi = $r->namaprodi;
      $post->peluangkerja = $r->isi;
      $post->save();
      return back();
    }
    public function upprodidanpeluang(Request $r,$id)
    {
      $update = Prodidanpeluang::find($id);
      $update->namaprodi = $r->namaprodi;
      $update->update();
    }
    public function dlprodidanpeluang($id)
    {
      $delete = Prodidanpeluang::find($id);
      $delete->delete();
    }
    //==== end prodidanpeluang==//

    //=== slider ==//
    public function slider()
    {
        //$tampil = Slider::orderBy('id','desc')->get();
        return view('auth.section.slider',compact('tampil'));
    }
    public function svslider(Request $r)
    {
      $file = $r->file('img');
      //dd($file);
      $ext = $file->getClientOriginalExtension();
      $namafile = date('YmdHsi'). ".$ext";
      $file->move('upload/slider',$namafile);

      $post = new Slider();
      $post->title = $r->title;
      $post->foto = $namafile;
      $post->save();
      return back();
    }
    public function upslider(Request $r,$id)
    {
      $update = Slider::find($id);
      $update->title = $r->title;
      $update->foto = $r->foto;
      $update->update();
    }
    public function dlslider($id)
    {
      $delete = Slider::find($id);
      $delete->delete();
    }
    //==== end slider==//

    //=== urlinfo ==//
    public function urlinfo()
    {
        $tampil = Urlinfo::orderBy('id','desc')->get();
        return view('auth.section.urlinfo',compact('tampil'));
    }
    public function svurlinfo(Request $r)
    {
      $file = $r->file('banner');
      //dd($file);
      $ext = $file->getClientOriginalExtension();
      $namafile = date('YmdHsi'). ".$ext";
      $file->move('upload/urlbanner',$namafile);


      $post = new Urlinfo();
      $post->title = $r->title;
      $post->url = $r->url;
      $post->banner = $namafile;
      $post->save();
      return back();
    }
    public function upurlinfo(Request $r,$id)
    {
      $update = Urlinfo::find($id);
      $update->title = $r->title;
      $update->url = $r->url;
      $update->banner = $update->banner;
      $update->update();
    }
    public function dlurlinfo($id)
    {
      $delete = Urlinfo::find($id);
      $delete->delete();
    }
    //==== end urlinfo==//



}
