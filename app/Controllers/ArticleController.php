<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Article;
use CodeIgniter\HTTP\ResponseInterface;
class ArticleController extends BaseController {
    public function articles() {
        $title = 'Daftar Artikel';
        $model = new Article();
        $articles = $model->findAll();

        // return view('articles/index', compact('articles', 'title'));
        return view('articles', ['title'=>$title, 'articles'=>$articles]);
    }

    public function view($slug) {
        $model = new Article();
        $article = $model->where([
            'slug' => $slug
        ])->first();
        // Menampilkan error apabila data tidak ada.
        if (!$article) {
            var_dump('Error: article not found!');
        }
        $title = $article['judul'];

        return view('article/detail', compact('article', 'title'));
    }

    public function admin() {
        $title = 'Daftar Artikel';
        $q = $this->request->getVar('q') ?? '';
        $model = new Article();
        $data = [
            'title'=> $title,
            'q' => $q,
            'articles' => $model->like('judul', $q)->paginate(10),
            'pager' => $model->pager,
        ];

        return view('article/articles', compact('data', 'title'));
    }

    public function add() {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $article = new Article();
            $article->insert([
            'judul' => $this->request->getPost('judul'), 'isi' => $this->request->getPost('isi'),
            'slug' => url_title($this->request->getPost('judul')),
            ]);

            return redirect('admin/articles');
        }

        $title = "Tambah Artikel";
        return view('article/add', compact('title'));
    }

    public function edit($id) {
        $artikel = new Article();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $artikel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            ]);

            return redirect('admin/articles');
        }

        // ambil data lama
        $data = $artikel->where('id', $id)->first();
        $title = "Edit Artikel";

        return view('article/edit', compact('title', 'data'));
    }

    public function delete($id) {
        $artikel = new Article();
        $artikel->delete($id);

        return redirect('admin/articles');
    }

}
