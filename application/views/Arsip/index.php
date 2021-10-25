<!--**********************************
    Content body start
***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <center><h4 class="card-title">ARSIP SURAT</h4></center>
                            </div>
                            <div class="card-body">
                                <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
                                <br>
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Surat</th>
                                                <th>Kategori</th>
                                                <th>Judul</th>
                                                <th>Waktu Pengarsipan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($surat as $s):?>
                                            <tr>
                                                <th><?=$no++;?></th>
                                                <td><?=$s["nomor_surat"]?></td>
                                                <td><?=$s["kategori_surat"]?></td>
                                                <td><?=$s["judul"]?></td>
                                                <td><?=$s["waktu_pengarsipan"]?></td>
                                                <td>
                                                    <a onclick="return konfirmasi()" href="<?= base_url();?>C_Arsip/Hapus_Surat/<?=$s['id_surat'];?>">
                                                        <span class="badge badge-danger">Hapus
                                                    </a>
                                                    <a href="<?= base_url('C_Arsip/Download/' . $s['id_surat']) ?>"><span class="badge badge-warning">Unduh</a>
                                                    <a href="<?= base_url();?>C_Arsip/Lihat_Surat/<?=$s['id_surat'];?>"><span class="badge badge-primary">Lihat >></a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <a href="<?=base_url()?>C_Arsip/Tambah_Surat">
                                    <button type="button" class="btn btn-primary">Arsipkan Surat >></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--**********************************
    Content body end
***********************************-->

<script type="text/javascript" language="JavaScript">
 function konfirmasi()
    {
        tanya = confirm("Apakah Anda yakin ingin menghapus arsip surat ini?");
        if (tanya == true) return true;
            else return false;
    }
 </script>