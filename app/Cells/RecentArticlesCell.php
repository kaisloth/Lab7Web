<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\Article;

class RecentArticlesCell extends Cell
{
    public function render(): string
    {
        $model = new Article();
        $articles = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();
        return view('components/recent_articles', ['articles' => $articles]);
    }
    
}
