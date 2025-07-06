<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();

        // Ambil limit dari GET parameter (default 3)
        $limit = $this->request->getGet('limit');
        $limit = (is_numeric($limit) && $limit > 0) ? (int)$limit : 3;

        // Ambil semua data sesuai limit
        $data['blogs'] = $model->orderBy('published_at', 'DESC')->findAll($limit);

        // Jumlah total blog di DB
        $data['total'] = $model->countAll();
        $data['limit'] = $limit;

        // Cek apakah ada artikel yang diklik
        $selectedId = $this->request->getGet('article_id');
        $data['selected'] = $selectedId ? $model->find($selectedId) : null;

        return view('v_blog', $data);
    }

    public function detail($id)
    {
        $model = new BlogModel();
        $blog = $model->find($id);

        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Artikel tidak ditemukan");
        }

        return view('v_blog_detail', ['blog' => $blog]);
    }
}