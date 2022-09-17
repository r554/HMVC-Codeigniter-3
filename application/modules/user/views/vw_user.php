<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5 mt-5">
                <h3 class="text-center">Data User</h3>
            </div>
        </div>

        <div class="row">
            <a href="<?= base_url('user/tambah_user') ?>"><button class="btn btn-success btn-sm">Tambah User</button></a>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_user as $data_user) :  ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $no++; ?></th>
                                <td class="text-center"><?= $data_user->name_user; ?></td>
                                <td><?= $data_user->address_user; ?></td>
                                <td class="text-center"><?= $data_user->telp_user; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('user/hapus_data_user/' . $data_user->id_user) ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="<?= base_url('user/edit_user/' . $data_user->id_user) ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>