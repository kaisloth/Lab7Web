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

    <?php if($articles): foreach($articles as $row): ?>
        <article class="entry">
            <h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=
            $row['judul']; ?></a>
            </h2>
            <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=
            $row['judul']; ?>">
            <p><?= substr($row['isi'], 0, 200); ?></p>
        </article>
        <hr class="divider" />
    <?php endforeach; else: ?>
        <article class="entry">
            <h2>Belum ada data.</h2>
        </article>
    <?php endif; ?>

<?= $this->include('templates/footer'); ?>

<style>
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