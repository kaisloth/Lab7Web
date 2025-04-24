<?= $this->include('templates/admin_header'); ?>

    <div class="form-container">
        <h2><?= $title; ?></h2>
        <form action="" method="post">
            <p>
                <input class="input-field" type="text" name="judul">
            </p>
            <p>
                <textarea class="input-field" name="isi" cols="50" rows="10"></textarea>
            </p>
            <p><input type="submit" value="Kirim" class="btn btn-large"></p>
        </form>
    </div>
    
<?= $this->include('templates/admin_footer'); ?>