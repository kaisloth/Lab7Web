<?= $this->include('templates/admin_header'); ?>

    <div class="form-container">
        <h2><?= $title; ?></h2>
        <form action="<?= env('app_url').'/api/article/add'?>" method="post" enctype="multipart/form-data">
            <p>
                <input class="input-field" type="text" name="judul" placeholder="Judul Artikel">
            </p>
            <p>
                <textarea class="input-field" name="isi" cols="50" rows="10" placeholder="Isi Artikel"></textarea>
            </p>
            <p>
                <label for="artikel-img-input">Gambar Artikel:</label>
                <input id="artikel-img-input" class="input-field" type="file" name="gambar" accept=".jpg, .jpeg, .gif, .png, .webp">
            </p>
            <p><input type="submit" value="Kirim" class="btn btn-large"></p>
        </form>
    </div>
    
<?= $this->include('templates/admin_footer'); ?>