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