<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer Form</title>
</head>

<body>
    <div class="container">
        <div class="formheader  mt-2 text-center "><h2><b>Customer Form</b></h2></div>
        <form class="row g-3" method="post" enctype="multipart/form-data">
            <div class="col-md-5 offset-3">
                <label for="fullname" class="form-label">FullName:</label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter FullName">
            </div>
            <div class="col-md-5 offset-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="col-md-5 offset-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="col-md-5 offset-3">
                <label for="dob" class="form-label">Date oF Birth:</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter Date of Birth">
            </div>
            <div class="col-md-5 offset-3">
                <label for="phone" class="form-label">phone:</label>
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div class="col-md-5 offset-3">
                <label for="Adhar" class="form-label">Aadhar No:</label>
                <input type="tel" minlength="12" maxlength="12" name="Adhar" class="form-control" id="Adhar" placeholder="XXXX-XXX-XXXX" >
            </div>
            <div class="col-md-5 offset-3">
                <label for="address" class="form-label">Address :</label>
                <textarea id="address" name="address" class="form-control" rows="2" cols="40"></textarea>
                <!-- <input type="textarea" name="address" class="form-control" id="address"  > -->
            </div>
            <div class="col-md-5 offset-3">
                <label for="accountno" class="form-label">Account No:</label>
                <input type="number" minlength="16" maxlength="16" name="accountno" class="form-control" id="accountno"  >
            </div>
            <div class="col-md-5 offset-3">
                <label for="openingbal" class="form-label">Opening Balance:</label>
                <input type="number" minlength="16" maxlength="16" name="openingbal" class="form-control" id="openingbal"  >
            </div>

           
            <div class="col-md-6 offset-5">
                <button type="submit" name="add" id="add" class="btn btn-primary">Add Form</button>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>