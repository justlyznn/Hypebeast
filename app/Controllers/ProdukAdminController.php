<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use Dompdf\Dompdf;

class ProdukAdminController extends BaseController
{
    protected $product;

    function __construct()
    {
        $this->product = new ProductModel();
    }
    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_produkAdmin', $data);
        $model = new ProductModel();
        $products = $model->findAll();

        return view('v_produkAdmin', ['product' => $products]);
    }

    public function edit($id)
    {
        $dataProduk = $this->product->find($id);

        $dataForm = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'status' => ($this->request->getPost('stock') > 0) ? 'Ready' : 'Out of Stock',
            'updated_at' => date("Y-m-d H:i:s")
        ];

        if ($this->request->getPost('check') == 1) {
            if ($dataProduk['image'] != '' and file_exists("img/" . $dataProduk['image'] . "")) {
                unlink("img/" . $dataProduk['image']);
            }

            $dataFoto = $this->request->getFile('image');

            if ($dataFoto->isValid()) {
                $fileName = $dataFoto->getRandomName();
                $dataFoto->move('img/', $fileName);
                $dataForm['image'] = $fileName;
            }
        }

        $this->product->update($id, $dataForm);

        return redirect('produk-admin')->with('success', 'Data Berhasil Diubah');
    }

    public function create()
    {
        $dataFoto = $this->request->getFile('image');

        $dataForm = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'status' => ($this->request->getPost('stock') > 0) ? 'Ready' : 'Out of Stock',
            'updated_at' => date("Y-m-d H:i:s")
        ];

        if ($dataFoto->isValid()) {
            $fileName = $dataFoto->getRandomName();
            $dataForm['image'] = $fileName;
            $dataFoto->move('img/', $fileName);
        } 

        $this->product->insert($dataForm);

        return redirect('produk-admin')->with('success', 'Data Berhasil Ditambah');
    }

    public function delete($id)
    {
        $dataProduk = $this->product->find($id);

        if ($dataProduk['image'] != '' and file_exists("img/" . $dataProduk['image'] . "")) {
            unlink("img/" . $dataProduk['image']);
        }

        $this->product->delete($id);

        return redirect('produk-admin')->with('success', 'Data Berhasil Dihapus');
    }

    public function download()
    {
        //get data from database
        $product = $this->product->findAll();

        //pass data to file view
        $html = view('v_produkPDF', ['product' => $product]);

        //set the pdf filename
        $filename = date('y-m-d-H-i-s') . '-product';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content (file view)
        $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
