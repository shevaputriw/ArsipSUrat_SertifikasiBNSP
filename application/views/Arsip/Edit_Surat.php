<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Arsip Surat >> Edit</h4>
                    </div>
                    <div class="card-body">
                        <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
                        <p>Catatan : Gunakan file berformat PDF</p>
                        <div class="basic-form">
                            <?php if (validation_errors()): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?=base_url('C_Arsip/Edit_Surat/'.$surat['id_surat'])?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_surat" value="<?=$surat['id_surat'];?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomor_surat" required autocomplete="off" value="<?=$surat["nomor_surat"];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select id="inputState" class="form-control" name="kategori_surat"
                                            <option selected value="<?=$surat["kategori_surat"]?>"><?=$surat["kategori_surat"]?></option>
                                            <?php foreach($kategori_surat as $ks) :?>
                                                <option value="<?=($ks)?>"><?=($ks)?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Judul Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" required autocomplete="off" value="<?=$surat["judul"];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="old_file" value="<?= $surat['file_surat'];?>" />
                                        <input type="file" class="form-control" name="file_surat">
                                        <p style="color:#808080;">
                                            <?php if($surat['file_surat'] != NULL) {?>
                                            Arsip surat saat ini : <?=$surat['file_surat'];?>
                                            <?php } else {?>
                                            <?php echo 'File Surat belum ditambahkan'; ?>
                                            <?php }?>
                                        </p>
                                    </div>
                                    
                                </div>
                                <center><br>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <a href="<?=base_url()?>C_Arsip/Lihat_Surat/<?=$surat["id_surat"]?>"><button type="button" class="btn btn-primary"><< Kembali</button></a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>