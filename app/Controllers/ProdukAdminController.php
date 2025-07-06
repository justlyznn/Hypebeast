<?php

namespace App\Controllers;

use App\Models\ProdukAdminModel;

class ProdukAdminController extends BaseController
{
    protected $product;
    
    function __construct()
    {
        $this->product = new ProdukAdminModel();
    }
    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_produkAdmin', $data);
    }

     public function edit($id)
    {
		    //pada fungsi harus diberi variable untuk menerima value dari parameter
		    //contohnya menggunakan variable $id
		    
		    $dataForm = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        ];
        
        $this->product->update($id, $dataForm);
    } 

    public function create()
{
    $dataFoto = $this->request->getFile('foto');

    $dataForm = [
        'name' => $this->request->getPost('name'),
        'price' => $this->request->getPost('price'),
        'stock' => $this->request->getPost('stock'),
    ];

    if ($dataFoto->isValid()) {
        $fileName = $dataFoto->getRandomName();
        $dataForm['image'] = $fileName;
        $dataFoto->move('img/', $fileName);
    }

    $this->product->insert($dataForm);

    return redirect('produk')->with('success', 'Data Berhasil Ditambah');
} 
}