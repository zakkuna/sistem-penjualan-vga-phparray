<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sederhana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <h2 class="title">VGA Card Information</h2>
            <table class="table is-bordered is-fullwidth">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Vga</th>
                        <th>Pin power</th>
                        <th>Konektor</th>
                        <th>Watt</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "data_barang.php";
                    data_vga(); ?>
                </tbody>
            </table>
        </div>


        <div class="container">
            <?php include 'form_barang.php'; ?>
        </div>


        <div class="container">
            <?php include 'proses.php'; ?>

    </section>
</body>

</html>