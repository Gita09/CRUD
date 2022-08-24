<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Sticky Footer Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container-fluid">
            <h1 class="mt-5">Data Mahasiswa</h1>
            <hr />
            <a href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">Tambah</a>
            <br><br>
            <form action="" method="post">
                <div class="input-group mb-3 col-6">
                    <input type="text" class="form-control" placeholder="Masukkan Kata Kunci Pencarian" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aktivitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($mahasiswa as $row) {
                    ?>
                        <tr>

                            <td><?= $nomor++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->jenis_kelamin; ?></td>
                            <td><?= $row->no_telp; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->alamat; ?></td>
                            <td><a title="Edit" href="<?= base_url("mahasiswa/edit/$row->id_mahasiswa"); ?>" class="btn btn-info">Edit</a>
                                <a title="Delete" href="<?= base_url("mahasiswa/delete/$row->id_mahasiswa"); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?= $pager->links('datamahasiswa', 'bootstrap_pagination'); ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
</body>

</html>