<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$hargavga = [
    'BRG01' => 350000,
    'BRG02' => 5000000,
    'BRG03' => 150000,
    'BRG04' => 80000
];

$namavga = [
    'BRG01' => "VGA 1080p",
    'BRG02' => "VGA 4K UHD",
    'BRG03' => "VGA Mini DP",
    'BRG04' => "VGA HDMI"
];

$deskripsivga = [
    'BRG01' => [
        'Konektor' => 'HDMI, DVI',
        'Pin Power' => '6-Pin',
        'Watt' => '150W'
    ],
    'BRG02' => [
        'Konektor' => 'HDMI, DisplayPort',
        'Pin Power' => '8-Pin',
        'Watt' => '250W'
    ],
    'BRG03' => [
        'Konektor' => 'Mini DisplayPort',
        'Pin Power' => '6-Pin',
        'Watt' => '120W'
    ],
    'BRG04' => [
        'Konektor' => 'HDMI',
        'Pin Power' => '6-Pin',
        'Watt' => '100W'
    ]
];

if (isset($_POST["beli"])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $beli = $_POST['jumlah'];

    $total = $hargavga[$kode] * $beli;
} else {
    echo "gagal";
}
?>


<br>
<p class="subtitle">Tanggal Transaksi: <?php echo date('l, d F Y') ?></p>
<p class="subtitle">Nama Pembeli: <?php echo "$nama" ?></p>




<table class="table is-bordered">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Vga</th>
            <th>Harga</th>
            <th>Jumlah beli</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "$kode"; ?></td>
            <td><?php echo $namavga[$kode]; ?></td>
            <td><?php echo "Rp." . number_format($hargavga[$kode], 0, ",", "."); ?></td>
            <td><?php echo "$beli"; ?></td>
            <td><?php echo "Rp." . number_format($total, 0, ",", ","); ?></td>
        </tr>
    </tbody>
</table>

<div class="content">

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Kode Barang: <?php echo $kode; ?> - <?= $namavga[$kode]; ?>
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <p><strong>Konektor:</strong> <?php echo $deskripsivga[$kode]['Konektor']; ?></p>
                <p><strong>Pin Power:</strong> <?php echo $deskripsivga[$kode]['Pin Power']; ?></p>
                <p><strong>Watt:</strong> <?php echo $deskripsivga[$kode]['Watt']; ?></p>
            </div>
        </div>
    </div>
</div>