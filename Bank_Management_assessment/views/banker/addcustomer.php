<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->
    <title>Customer Form</title>
</head>

<body>
    <div class="formheader text-center bg-light text-dark mt-2 "><a href="banker">Home</a>
        
        <h2><b>Customer Form</b></h2>
    </div>
    <form class="row g-3 bg-light text-dark" method="post" enctype="multipart/form-data">
        <div class="col-md-5 offset-3">
            <label for="fullname" class="form-label">FullName:</label>
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter FullName">
        </div>
        <div class="col-md-5 offset-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="col-md-5 offset-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
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
            <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="phone" placeholder="Enter phone">
        </div>
        <div class="col-md-5 offset-3">
            <label for="gender">Gender:</label><br>
            <label for="Male">Male</label> <input type="radio" value="Male" name="gender" id="Male">
            <label for="Female">Female</label> <input type="radio" value="Female" name="gender" id="Female">
            <label for="Other">Other</label> <input type="radio" value="Other" name="gender" id="Other">
        </div>
        <div class="col-md-5 offset-3">
            <label for="adharno" class="form-label">Aadhar No:</label>
            <input type="text" minlength="12" maxlength="12" name="adharno" class="form-control" id="adharno" placeholder="Enter Aadhar No">
        </div>
        <div class="col-md-5 offset-3">
            <label for="profile_pic">profile_pic</label>
            <input type="file" class="form-control" id="" name="profile_pic">
            <!-- <input type="hidden" class="form-controls" id="profile_pic" name="profile_pic"> -->
        </div>
        <div class="col-md-5 offset-3">
            <label for="address" class="form-label">Address :</label>
            <textarea id="address" name="address" class="form-control" rows="2" cols="40"></textarea>
            <!-- <input type="textarea" name="address" class="form-control" id="address"  > -->
        </div>

        <div class="col-md-5 offset-3">
            <label for="accounttype">Account Type:</label>
            <select name="accounttype" id="accounttype">
            <option disabled="disabled" selected="selected">Choose option</option>
                <option value="saving"> Saving Account</option>
                <option value="current"> Current Account</option>
            </select>
        </div>
        <div class="col-md-5 offset-3">
            <label for="accountno" class="form-label">Account No:</label>
            <input type="tel" minlength="16" maxlength="16" name="accountno" class="form-control" id="accountno">
        </div>
        <div class="col-md-5 offset-3">
            <label for="openingbal" class="form-label">Opening Balance:</label>
            <input type="number" name="openingbal" class="form-control" id="openingbal">
        </div>


        <div class="col-md-5 offset-4">
            <button type="submit" name="add" id="add" class="btn btn-primary">Customer Form</button>
            <button type="reset" class="btn btn-danger ">Clear</button>
        </div>
    </form>



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