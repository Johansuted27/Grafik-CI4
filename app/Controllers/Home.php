<?php

namespace App\Controllers;
use App\Models\PenjualanModel;
use App\Models\PjlProdukModel;

class Home extends BaseController
{
    public function index()
    {
        $dataPenjualan = new PenjualanModel();
        $dataPjlProduk = new PjlProdukModel();

        // Penjualan
        $data['pj2019'] = $dataPenjualan->where('tahun','2019')->orderBy('created_at', 'ASC')->findAll();
        $data['pj2021'] = $dataPenjualan->where('tahun','2021')->orderBy('created_at', 'ASC')->findAll();

        // Penjualan per produk
        $data['pjl_produk'] = $dataPjlProduk->findAll();
        $data['produk_teratas'] = $dataPjlProduk->orderBy('terjual', 'DESC')->findAll(5);

        // echo json_encode($data['produk_teratas']);
        return view('index', $data);
    }
}
