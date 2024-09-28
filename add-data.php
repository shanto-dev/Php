<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <section class="addUser mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-4">Create Your User Data</h2>
                    <a href="index.php" class="btn btn-primary mb-4">Back</a>
                    <div class="card mb-3 shadow-lg p-4 rounded-3 w-75">
                        <div class="card-body">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="user-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="user-name" placeholder="Your Name">
                            </div>
                            <div class="col-12">
                                <label for="user-age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="user-age" placeholder="Your Age">
                            </div>
                            <div class="col-12">
                                <label for="user-skill" class="form-label">Skill</label>
                                <input type="text" class="form-control" id="user-skill" placeholder="Your Skill">
                            </div>
                            <div class="col-12">
                                <label for="user-address" class="form-label">Addressd</label>
                                <input type="text" class="form-control" id="user-address" placeholder="Your Address">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary fw-bold">Create</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>