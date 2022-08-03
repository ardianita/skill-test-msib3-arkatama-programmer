<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyek MSIB</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <form method="POST" action="<?= base_url('proyek/tambah'); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="name" class="form-control" name="name" placeholder="Enter Name" value="<?= set_value('name'); ?>" onkeyup="this.value = this.value.toUpperCase()">
                    <?= form_error('name', '<div class="text-danger small">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Kota</label>
                    <input type="city" class="form-control" name="city" placeholder="Enter City" value="<?= set_value('city'); ?>" onkeyup="this.value = this.value.toUpperCase()">
                    <?= form_error('city', '<div class="text-danger small">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Enter Age" value="<?= set_value('age'); ?>" onkeyup="this.value = this.value.toUpperCase()">
                    <?= form_error('age', '<div class="text-danger small">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($proyek as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['city']; ?></td>
                            <td><?= $p['age']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>

</html>