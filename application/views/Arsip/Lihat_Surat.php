<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Arsip Surat >> Lihat</h4>
                    </div>
                    <div class="card-body">
                    <?php foreach ($surat as $s) :?>
                        <p>Nomor Surat : <?=$s["nomor_surat"]?></p>
                        <p>Keterangan : <?=$s["kategori_surat"]?></p>
                        <p>Judul : <?=$s["judul"]?></p>
                        <p>Waktu Diunggah : <?=$s["waktu_pengarsipan"]?></p>
                        <iframe class="mt-3" src="<?= base_url("upload/surat/" . $s["file_surat"]) ?>" width="100%" height="550px"></iframe>
                    
                    <center>
                        <div class="col-sm-12">
                            <a href="<?=base_url()?>C_Arsip/index"><button type="button" class="btn btn-primary"><< Kembali</button></a>
                            <a href="<?=base_url()?>C_Arsip/Download/<?=$s["id_surat"]?>"><button type="button" class="btn btn-primary">Unduh</button></a>
                            <a href="<?=base_url()?>C_Arsip/Edit_Surat/<?=$s['id_surat'];?>"><button type="button" class="btn btn-primary">Edit/Ganti File</button>
                        </div>
                    </center>
                    <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>