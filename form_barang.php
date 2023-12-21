<form method="post">
    <h1 class="title">Input Pesanan</h1>

    <div class="field">
        <label class="label">Kode Pesanan</label>
        <div class="control">
            <div class="select">
                <select name="kode">
                    <?php
                    $kode = array('BRG01', 'BRG02', 'BRG03', 'BRG04');
                    $namabrg = array("VGA 1080p", "VGA 4K UHD", "VGA Mini DP", "VGA HDMI");
                    for ($i = 0; $i < count($kode); $i++) {
                        echo "<option value='$kode[$i]'>$kode[$i] - $namabrg[$i]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Nama Pembeli</label>
        <div class="control">
            <input class="input" type="text" name="nama" placeholder="Masukkan Nama">
        </div>
    </div>

    <div class="field">
        <label class="label">Jumlah Barang</label>
        <div class="control">
            <input class="input" type="number" name="jumlah" placeholder="Masukkan Jumlah Beli">
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary" type="submit" value="beli" name="beli">Beli Barang!</button>
        </div>
    </div>
</form>