<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regis Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">

</head>

<body>


    <table id="#myTable">
        <thead>
            <tr>
                <th>Date create</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_data_tamu as $row) { ?>
                <tr>
                    <td> <?php echo date('d-F-Y', strtotime($row->created_at)) ?></td>
                    <td> <?= $row->name ?> </td>
                    <td> <?= $row->email ?> </td>
                    <td> <?= $row->password ?> </td>
                    <td> <a href="<?php echo base_url('edit') . '/' . $row->id ?>" class="btn btn-info btn-sm">edit</a>
                        <a href="<?php echo base_url('delete') . '/' . $row->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>



    <a href="<?php echo  base_url() . 'register' ?>" class="btn btn-primary">Register</a>





    <script src="./datatables/datatables.min.js"></script>
    <script type="text/javascript" src="./datatables/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>