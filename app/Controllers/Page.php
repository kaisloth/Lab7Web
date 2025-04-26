<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function about() {
        return view('about', [
            'title' => 'About Page',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus id reprehenderit ea eligendi doloribus, ipsa quae incidunt quam iusto repellendus. Iusto reiciendis maxime corporis quam, pariatur tempora laborum ab consequuntur quo exercitationem officiis necessitatibus quae molestiae recusandae in? Temporibus dolores accusantium aperiam. Cum maxime, debitis nisi, sit blanditiis fuga, necessitatibus eos provident deleniti ut ab atque impedit animi molestiae sed nostrum? Odit quis est culpa mollitia voluptates neque quam facere, aperiam molestiae suscipit quidem ducimus? Amet cupiditate eveniet minima nobis dignissimos! Unde mollitia soluta asperiores necessitatibus vel sapiente natus esse, nisi, cupiditate deleniti quidem eum eligendi odio sint, est odit!'
        ]);
    }
    public function contact() {
        return view("contact", ['title' => 'Contact Us']);
    }
    // public function articles() {
    //     return view("articles", ['title' => 'Articles']);
    // }

    public function tos() {
        echo "ini halaman Term of Services";
    }
}
