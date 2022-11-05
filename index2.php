<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recharge Successfully!</h1>

    <table class="table table-bordered table-striped">

                <thead>
                    <tr>

                        <th>User</th>
                        <th>Account Info</th>
                        <th>Recharge Amount</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($recharges as $wallet){ ?>
                                <tr>
                                    <td><?php echo $wallet->login_info_id?></td>
                                    <td><?php echo $wallet->bkash_amount ?></td>
                                    <td><?php echo $wallet->recharge_amount ?></td>


                                </tr>

                                <?php

                            } ?>
                             <tr>

</tr>
</tbody>
</table>

</body>
</html>
