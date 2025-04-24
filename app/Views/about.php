<?= $this->include('templates/header'); ?>
    <div class="container">
        <div class="content-wrapper">
            <h1 class="in-css"><?= $title; ?></h1>
            <p class="in-css"><?= $content; ?></p>
        </div>
    </div>
<?= $this->include('templates/footer'); ?>

<style>
    h1.in-css {
        color: #333;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 10px;
        background-color: #428bca;
        color: #fff;
        border-radius: 5px;
    }

    p.in-css {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .content-wrapper {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
</style>