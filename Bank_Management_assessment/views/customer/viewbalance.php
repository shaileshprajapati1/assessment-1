<?php error_reporting(0) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="formheader text-center  mt-2 ">

        <h2><b>Withdraw Amount</b></h2>

    </div>
    <table>
        <thead>
            <tr>
                <form method="post">
                    <th>
                        <label for="">Acoount No:</label>
                        <input type="text" name="accountno" id="accountno" required>
                    </th>
                    <th>
                        <input type="submit" name="view">
                    </th>
                </form>
            </tr>


        </thead>
    </table>
    <table class="table">
        <thead>
      
            <tr>
                <th>Fullname</th>
                <th>Account No</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $ViewallRes["Data"][0]->fullname;  ?></td>
                <td><?php echo $ViewallRes["Data"][0]->accountno;  ?></td>
                <td><?php echo $ViewallRes["Data"][0]->openingbal;  ?></td>
            </tr>

        </tbody>
    </table>


</body>

</html>