<!DOCTYPE html>
<html>
  <head>
    <title>Recharge Page</title>
    <link rel="stylesheet"  href="" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Recharge(T-kash)</h1>
          </div>
          <div class="panel-body">
          <form action="<?php echo url('wallet/store2') ?>" method="post">
                    <?php echo csrf_field(); ?>





              </div>
              <div class="form-group">
                <label for="accountno">Account No.</label>
                <input
                  type="int"
                  class="form-control"
                  id="accountno"
                  name="bkash_account"
                />
              </div>
              <div class="form-group">
                <label for="rechargeamount">Recharge amount</label>
                <input
                  type="int"
                  class="form-control"
                  id="rechargeamount"
                  name="recharge_amount"
                />
              </div>

              <input type="submit" class="btn btn-primary" /></br>
              <a href="" class="btn btn-primar">Check Balance</a>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; BUP E-wallet</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>


  </body>
</html>
