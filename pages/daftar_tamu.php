<h4>Daftar Tamu</h4>
<div class="table-responsive">
    <table class="table table-striped" id="table_data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No. Handphone</th>
                <th>Alamat</th>
                <th>Tanggal Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($mysqli->daftar_tamu()as $d);
                if($d>1){ 
                foreach($mysqli->daftar_tamu()as $x){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $x['nama'];?></td>
                        <td><?php echo $x['hp'];?></td>
                        <td><?php echo $x['alamat'];?></td>
                        <td><?php echo $x['tanggal'];?></td>
                    </tr>
                <?php } } else{ echo '<tr><td colspan="5" class="text-center">Belum ada data tamu!</td></tr>'; }  ?>
        </tbody>
    </table>
</div>