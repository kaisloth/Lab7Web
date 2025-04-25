<h3 class="title">Artikel Terkini</h3>
<ul>
    <?php foreach ($articles as $row): ?>
        <li><a href="<?= base_url('/articles/' . $row['slug']) ?>"><?=
        $row['judul'] ?></a></li>
    <?php endforeach; ?>
</ul>