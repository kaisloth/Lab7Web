<?= $this->include('templates/header'); ?>

    <!-- <article class="entry">
        <h2>First featurette heading.</h2>
        <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem
        elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla,
        vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc
        pretium ac.</p>
    </article>
    <hr class="divider" />
    <article class="entry">
        <h2>First featurette heading.</h2>
        <img src="https://dummyimage.com/150/7b8a70/fff.png" alt=""
        class="right-img">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem
        elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla,
        vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc
        pretium ac.</p>
    </article> -->

    <?php if($data['articles']): foreach($data['articles'] as $row): ?>
        <article class="entry">
            <a style="color: black;" href="<?= $row['slug']?>"><h2 style="display: inline-block"><?=
            $row['judul']; ?></h2></a>
            <img style="aspect-ratio: 1/1; width:4em;" src="<?= $row['gambar']?>" alt="<?=
            $row['judul']; ?>">
            <p><?= substr($row['isi'], 0, 200); ?></p>
        </article>
        <hr class="divider" />
    <?php endforeach; else: ?>
        <article class="entry">
            <h2>Belum ada data.</h2>
        </article>
    <?php endif; ?>

    <nav class="bg-transparent">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="?page=<?= $data["pager"]->getCurrentPage() - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            
            <?php
            $pages = $data['pager']->getPageCount();
            for($i = 1; $i <= $pages; $i++):?>
                <li class="page-item <?php if($data["pager"]->getCurrentPage() == $i): echo "active"; else: echo ""; endif;?>" <?php if($data["pager"]->getCurrentPage() == $i): echo "aria-current='page'"; else: echo ""; endif; ?>>
                    <a class="page-link" href="?page=<?= $i?>"><?= $i?></a>
                </li>
            <?php endfor; ?>

            <li class="page-item">
                <a class="page-link" href="?page=<?= $data["pager"]->getCurrentPage() + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
</nav>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?= $this->include('templates/footer'); ?>