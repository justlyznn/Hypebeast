<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CartController extends BaseController
{
    public function index()
    {
        $cart = session()->get('cart') ?? [];
        return view('v_cart', ['cart' => $cart]);
    }

    public function add()
    {
        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $image = $this->request->getPost('image');

        $cart = session()->get('cart') ?? [];

        // Cek apakah item sudah ada di cart
        $found = false;
        foreach ($cart as &$item) {
            if ($item['id'] == $id) {
                $item['quantity']++;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $cart[] = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'quantity' => 1
            ];
        }

        session()->set('cart', $cart);
        return $this->response->setJSON(['status' => 'success']);
    }
}
