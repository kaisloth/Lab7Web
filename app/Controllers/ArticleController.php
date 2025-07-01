<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Article;
use CodeIgniter\HTTP\ResponseInterface;
class ArticleController extends BaseController {
    public function articles() {
        $title = 'Daftar Artikel';
        $model = new Article();
        
        $q = $this->request->getVar('q') ?? '';
        $data = [
            'title'=> $title,
            'q' => $q,
            'articles' => $model->like('judul', $q)->paginate(5),
            'pager' => $model->pager,
        ];
        
        return view('articles', compact('data', 'title'));

        // return view('articles/index', compact('articles', 'title'));
        // return view('articles', ['title'=>$title, 'articles'=>$articles]);
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

    public function dashboard() {
        $title = 'Daftar Artikel';
        $q = $this->request->getVar('q') ?? '';
        $model = new Article();
        $data = [
            'title'=> $title,
            'q' => $q,
            'articles' => $model->like('judul', $q)->paginate(5),
            'pager' => $model->pager,
        ];

        return view('article/dashboard', compact('data', 'title'));
    }

    public function add() {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {

            $file = $this->request->getFile('gambar');

            $fileName = $file->getRandomName();
            $filePath = FCPATH . '\gambar\\';
            $fileUrl = env('app_url') . 'gambar/' . $fileName;

            $file->move($filePath, $fileName);

            $article = new Article();
            $article->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => strtolower(url_title($this->request->getPost('judul'))),
                'gambar' => $fileUrl,
                'filepath_gambar' => $filePath
            ]);

            return redirect('admin/dashboard');
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

            return redirect('admin/dashboard');
        }

        // ambil data lama
        $data = $artikel->where('id', $id)->first();
        $title = "Edit Artikel";

        return view('article/edit', compact('title', 'data'));
    }

    public function delete($id) {
        $model = new Article();
        $artikel = $model->find($id);

        if(!empty($artikel)) {
            $model->delete($id);
            return redirect('admin/dashboard');
        }

    }

    public function search($q) {
        $model = new Article();
        $articles = $model->like('judul', $q)->paginate(5);

        return response()->setJSON($articles);
    }

}
