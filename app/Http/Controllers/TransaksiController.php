<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('backend.transaksi.index');
    }
    public function create()
    {
        return view('backend.transaksi.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nomor'    => 'required',
            'nama'     => 'required',
            'jenis'    => 'required',
            'total'    => 'required',
            'tanggal'  => 'required',
        ]);

        $transaksis = Transaksi::create([
            'nomor'   => $request->nomor,
            'nama'    => $request->nama,
            'jenis'   => $request->jenis,
            'total'   => $request->total,
            'tanggal'   => $request->tanggal,
        ]);

        }
    }
