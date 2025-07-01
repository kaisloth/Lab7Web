<?= $this->include('templates/admin_header'); ?>

<form id="form-search" action="" method="get" class="form-search d-flex flex-row align-items-center my-3">
    <input class="p-2" type="text" name="q" value="" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="bg-primary text-white">ID</th>
            <th class="bg-primary text-white">Judul</th>
            <th class="bg-primary text-white">Status</th>
            <th class="bg-primary text-white">Aksi</th>
        </tr>
    </thead>
    <tbody id="table-data">
         <?php if($data):?>

            <?php if($data['articles']): foreach($data['articles'] as $row):?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td>
                <b><?= $row['judul']; ?></b>
                    <p><small><?= substr($row['isi'], 0, length: 50); ?></small></p>
                </td>
                <td><?= $row['status']; ?></td>
                <td>
                    <div class="d-flex gap-2">
                        <a class="btn btn-secondary d-flex justify-content-center" href="<?= base_url('/admin/edit/' .
                        $row['id']);?>">Ubah</a>
                        <a class="btn btn-danger d-flex justify-content-center" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/delete/' .
                        $row['id']);?>">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
            <?php endif; ?>
        <?php endif; ?>
       
    </tbody>
    <tfoot>
        <tr>
            <th class="bg-primary text-white">ID</th>
            <th class="bg-primary text-white">Judul</th>
            <th class="bg-primary text-white">Status</th>
            <th class="bg-primary text-white">Aksi</th>
        </tr>
    </tfoot>
    
</table>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="<?= $data['pager']->getPreviousPageURI() ?>" aria-label="Previous">
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
            <a class="page-link" href="<?= $data['pager']->getNextPageURI() ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</script>



<?= $this->include('templates/admin_footer'); ?>