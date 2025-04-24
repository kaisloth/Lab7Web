<?= $this->include('templates/header'); ?>

    <article class="entry">
        <h2><?= $article['judul']; ?></h2>
        <img src="<?= base_url('/gambar/' . $article['gambar']);?>" alt="<?=
        $article['judul']; ?>">
        <p><?= $article['isi']; ?></p>
    </article>

<?= $this->include('templates/footer'); ?>

<link rel="stylesheet" href="../css/style.css">

<style>

    h2 {
        margin-bottom: 1em;
    }
    img {
        float: left;
        margin: 1em;
    }
</style>