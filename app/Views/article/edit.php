<?= $this->include('templates/admin_header'); ?>

    <div class="form-container">
    
        <h2><?= $title; ?></h2>
        <form action="" method="post">
            <p>
            <input class="input-field" type="text" name="judul" value="<?= $data['judul'];?>" >
            </p>
            <p>
            <textarea class="input-field" name="isi" cols="50" rows="10"><?=
            $data['isi'];?></textarea>
            </p>
            <p><input type="submit" value="Kirim" class="btn btn-large"></p>
        </form>

    </div>


<?= $this->include('templates/admin_footer'); ?>

<link rel="stylesheet" href="../../css/admin_style.css">