<?php
    $url = uri_string();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="../css/admin_style.css">
    </head>
    <style>
        nav {
            display: block;
            background-color: #1f5faa;
        }
        nav a:hover {
            background-color: #2b83ea;
        }
    </style>
<body>
    <div id="container">
        <header>
            <h1>Admin Portal Berita</h1>
        </header>
        <nav>
            <a style="<?= ($url == 'admin/dashboard') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/admin/dashboard');?>" class="active">Dashboard</a>
            <a style="<?= ($url == 'admin/articles') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/admin/articles');?>">Articles</a>
            <a style="<?= ($url == 'admin/add') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/admin/add');?>">Tambah Artikel</a>
        </nav>
        <section id="wrapper">
            <section id="main"></section>