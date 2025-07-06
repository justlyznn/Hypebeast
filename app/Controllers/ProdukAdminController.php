<?php

namespace App\Controllers;

use App\Models\ProductAdminModel;
use CodeIgniter\Controller;

class ProdukAdminController extends BaseController
{
    public function index()
    {
        $model = new ProductAdminModel();
        $data['products'] = $model->findAll();
        return view('v_produkAdmin', $data);
    }

    public function createOrUpdate($id = null)
    {
        $model = new ProductAdminModel();

        if ($id) {
            $data['product'] = $model->find($id);
        } else {
            $data['product'] = null;
        }

        return view('v_produkAdmin', $data);
    }

    public function storeOrUpdate($id = null)
    {
        $model = new ProductAdminModel();

        if (!$this->validate([
            'name' => 'required|min_length[3]',
            'price' => 'required|decimal',
            'stock' => 'required|integer',
            'status' => 'required'
        ])) {
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        $imageName = $image->isValid() ? $image->getName() : $this->request->getPost('old_image');

        if ($image && $image->isValid()) {
            $image->move('uploads', $imageName);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'status' => $this->request->getPost('status'),
            'image' => $imageName
        ];

        if ($id) {
            $model->update($id, $data);
        } else {
            $model->save($data);
        }

        return redirect()->to('/product/admin');
    }
}
