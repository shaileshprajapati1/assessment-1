<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all customer</title>
</head>

<body>
    <div class="container">
        <div class="formheader text-center  mt-2 ">

            <h2><b>Total Amount In Bank</b></h2>

        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Total Amount</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($AmountRes["Data"]["openingbal"]);
                // echo "</pre>";

                foreach ($AmountRes["Data"]["openingbal"] as $key => $value) {
                ?>
                    <tr>
                        <td>Total Amount :-</td>
                        <td><?php echo $value; ?> Rs</td>


                    </tr>
                <?php }

                ?>


            </tbody>
        </table>
    </div>

</body>

</html>