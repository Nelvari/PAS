<?php

namespace App\Http\Controllers;

use App\Models\ModelBahan;
use App\Models\ModelRequest;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index()
    {
        $data  = array(
            'bahan' => ModelBahan::all()
        );
        return View('dashboard', $data);
    }

    public function detail($id = 0)
    {
        $data = array(
            'bahan' => ModelBahan::find($id)
        );
        return View('detail', $data);
    }

    public function tambah(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = array(
                'namaBahan' => $request->input('namaBahan'),
                'jumlahBahan' => $request->input('jumlahBahan'),
                'kodeBahan' => $request->input('kodeBahan')
            );
            $tambah = ModelBahan::insert($data);
            if ($tambah) {
                echo "<script>alert('Tambah Data Berhasil')</script>";
                echo '<meta http-equiv="refresh" content="0;url=' . url('/') . '">';
            } else {
                echo 'Tambah Data Gagal';
            }
        }
        return View('tambah');
    }

    public function ubah($id = 0, Request $request)
    {
        $tbbahan = ModelBahan::find($id);
        if ($request->isMethod('post')) {
            $tbbahan->namaBahan = $request->input('namaBahan');
            $tbbahan->jumlahBahan = $request->input('jumlahBahan');
            $tbbahan->kodeBahan = $request->input('kodeBahan');
            $ubah = $tbbahan->save();
            if ($ubah) {
                echo "<script>alert('Ubah Data Berhasil')</script>";
                echo '<meta http-equiv="refresh" content="0;url=' . url('/') . '">';
            } else {
                echo 'Ubah Data Gagal';
            }
        }
        return View('ubah', array(
            'tbbahan' => $tbbahan
        ));
    }

    public function hapus($id)
    {
        $tbbahan = ModelBahan::find($id);
        $hapus = $tbbahan->delete();
        if ($hapus) {
            echo "<script>alert('Hapus Data Berhasil')</script>";
            echo '<meta http-equiv="refresh" content="0;url=' . url('/') . '">';
        }
    }

    public function request()
    {
        $data  = array(
            'request' => ModelRequest::all()
        );
        return View('request', $data);
    }

    public function tambahrequest(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = array(
                'namaRequest' => $request->input('namaRequest'),
                'jumlahRequest' => $request->input('jumlahRequest'),
                'namaBahan' => $request->input('namaBahan'),
                'kodeBahan' => $request->input('kodeBahan')
            );
            $tambah = ModelRequest::insert($data);
            if ($tambah) {
                echo "<script>alert('Tambah Request Berhasil')</script>";
                echo '<meta http-equiv="refresh" content="0;url=' . url('/request') . '">';
            } else {
                echo 'Tambah Data Gagal';
            }
        }
        return View('tambahrequest');
    }

    public function detailrequest($id = 0)
    {
        $data = array(
            'request' => ModelRequest::find($id)
        );
        return View('detailrequest', $data);
    }

    public function hapusrequest($id)
    {
        $tbrequest = ModelRequest::find($id);
        $hapus = $tbrequest->delete();
        if ($hapus) {
            echo "<script>alert('Hapus Data Berhasil')</script>";
            echo '<meta http-equiv="refresh" content="0;url=' . url('/request') . '">';
        }
    }
}
