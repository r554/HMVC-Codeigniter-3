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
                <h3 class="text-center">Edit Data User</h3>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <a href="<?= base_url('user') ?>"><button class="btn btn-warning btn-sm">Kembali</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url('user/update_data_user') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name User</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $data_user['0']->name_user; ?>">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $data_user['0']->id_user; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address User</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $data_user['0']->address_user; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp User</label>
                        <input type="text" class="form-control" id="telp" name="telp" value="<?= $data_user['0']->telp_user; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>