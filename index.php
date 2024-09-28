<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <section class="user_data m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 shadow-lg p-4 rounded-3">
                    <a href="add-data.php" class="btn btn-primary mb-4">Add New Data</a>
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Skill</th>
                            <th>Location</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img class="user-img" src="https://www.shutterstock.com/image-vector/user-profile-icon-vector-avatar-600nw-2247726673.jpg" alt="user-image"></td>
                                <td>Shanto</td>
                                <td>25</td>
                                <td>Wp Dev & PHP Dev</td>
                                <td>Rangpur</td>
                                <td>
                                    <a href="single-data.php" class="btn btn-sm btn-info"><i class="far fa-eye text-white"></i></a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>