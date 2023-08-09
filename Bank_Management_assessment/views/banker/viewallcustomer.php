<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all customer</title>
</head>

<body>
    
        <div class="formheader text-center  mt-2 ">

            <h2><b>View All Customer</b></h2>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Aadhar No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Account Type</th>
                    <th scope="col">Account No</th>
                    <th scope="col">Opening Balance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($ViewallRes["Data"]);
                // echo "</pre>";
                $i = 0;
                foreach ($ViewallRes["Data"] as $key => $value) {
                    $i++  ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->fullname; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->dob; ?></td>
                        <td><?php echo $value->phone; ?></td>
                        <td><?php echo $value->gender; ?></td>
                        <td><?php echo $value->adharno; ?></td>
                        <td><?php echo $value->address; ?></td>
                        <td><?php echo $value->accounttype; ?></td>
                        <td><?php echo $value->accountno; ?></td>
                        <td><?php echo $value->openingbal; ?></td>
                        
                        <?php if ($ViewallRes["Data"][0]->role_id == 2) { ?>
                         <td>  <a href="edit?userid=<?php echo $value->id; ?>">Edit</a></td> 
                         <td>  <a href="delete?userid=<?php echo $value->id; ?>">Delete</a></td> 
                            
                           
                    <?php    } ?>
                        
                    </tr>
                <?php }

                ?>


            </tbody>
        </table>
  

</body>

</html>