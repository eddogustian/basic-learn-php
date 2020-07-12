<div class="pull-right">
    <a href="<?php echo $base_url.'index.php?page=add-user'; ?>" class="btn btn-success">TAMBAH DATA</a>
</div>

<h2 style="margin-top: 0;margin-bottom: 0;">Pengguna</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Role</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'system/connection.php';
                $no = 1;
                $sql = $pdo->prepare("SELECT * FROM user");
                $sql->execute(); // Eksekusi querynya
                $data = $sql->fetch(); // Ambil datanya dari hasil query tadi

                // var_dump($data['nama']);die();
		    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['role'] ?></td>
                <td>
                    <a href="system/pengguna/edit.php?id=<?php echo $data['id']; ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="system/pengguna/hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
