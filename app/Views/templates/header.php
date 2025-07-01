<?php
    $url = uri_string();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        nav {
            display: block;
            background-color: #1f5faa;
        }
        nav a:hover {
            background-color: #2b83ea;
        }

         .divider {
            border:0;
            border-top:1px solid #eeeeee;
            margin:40px 0;
        }
        /* entry */
        .entry {
            margin: 15px 0;
        }
        .entry h2 {
            margin-bottom: 20px;
        }
        .entry p {
            line-height: 25px;
        }
        .entry img {
            float: left;
            border-radius: 5px;
            margin-right: 15px;
        }
        .entry .right-img {
            float: right;
        }
    </style>
<body>
    <div id="container">
        <header>
            <h1>Portal Berita</h1>
        </header>
        <nav>
            <a style="<?= ($url == '') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/');?>" class="active">Home</a>
            <a style="<?= ($url == 'articles') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/articles');?>">Articles</a>
            <a style="<?= ($url == 'about') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/about');?>">About</a>
            <a style="<?= ($url == 'contact') ? 'background-color: #2b83ea;' : 'background-color: #1f5faa;'; ?>" href="<?= base_url('/contact');?>">Contact</a>
        </nav>
        <section id="wrapper">
            <section id="main">