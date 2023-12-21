<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

function data_vga()
{

    $vga = [
        [
            "kode" => "BRG01",
            "nama" => "VGA 1080p",
            "pinpower" => 6,
            "konektor" => "DVI",
            "watt" => "250W",
            "harga" => 350000
        ],
        [
            "kode" => "BRG02",
            "nama" => "VGA 4K UHD",
            "pinpower" => 9,
            "konektor" => "DisplayPort",
            "watt" => "750W",
            "harga" => 5000000
        ],
        [
            "kode" => "BRG03",
            "nama" => "VGA Mini DP",
            "pinpower" => 3,
            "konektor" => "MiniDP",
            "watt" => "150W",
            "harga" => 150000

        ],
        [
            "kode" => "BRG04",
            "nama" => "VGA HDMI",
            "pinpower" => 4,
            "konektor" => "HDMi",
            "watt" => "100W",
            "harga" => 80000

        ]


    ];



    foreach ($vga as $val) {
        echo "<tr>
                        <td>$val[kode]</td>
                        <td>$val[nama]</td>
                        <td>$val[pinpower] Pin Power</td>
                        <td>$val[konektor] Konektor</td>
                        <td>$val[watt] Watt</td>
                        <td>" . number_format($val['harga']) . "</td>
                    </tr>";
    }
};
