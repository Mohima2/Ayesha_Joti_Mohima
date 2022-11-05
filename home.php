<!DOCTYPE html>
<html>
<head>
	<title></title>

    <style>
	* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Josefin Sans", sans-serif;

  }

  header {
    width: 100%;
    height: 100vh;
    background-image:
      url("bup03.jpg");
      background: rgba(0, 0, 0, 0.2);
    background-repeat: no-repeat;
    background-size: cover;
  }

  nav {
    width: 100%;
    height: 15vh;
    /*background: rgba(0, 0, 0, 0.2);*/
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;

  }

  nav .logo {
    width: 20%;
    text-align: left;
    /*background: red;*/
  }

  nav .menu {
    width: 50%;
    display: flex;
    justify-content: space-around;
    font-family: "Josefin Sans", sans-serif;
  }

  nav .menu a {
    width: 25%;
    text-decoration: none;
    color: white;
    /*font-weight: bold;*/
  }

  nav .menu a:first-child {
    color: #f9f8fb;
  }

  main {
    width: 100%;
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    text-transform: uppercase
  }

  section h3 {
    font-size: 35px;
    font-weight: 200;
    letter-spacing: 3px;
    text-shadow: 1px 1px 2px black;
    /*color: #4710ac;*/
    font-weight: bold;

    background: #251c34;
    color: white;
  }

  .h3:hover {
    background: #fff;
    color: #000;
  }

  section h1 {
    margin: 30px 0 20px 0;
    font-size: 55px;
    font-weight: 700;
    text-shadow: 2px 1px 5px black;

  }

  section p {
    font-size: 25px;
    word-spacing: 2px;
    margin-bottom: 25px;
    text-shadow: 1px 1px 1px black;
  }

  section a {
    padding: 12px 30px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.5s ease;
  }

  section .btnone {
    /*background: #00b894;*/
    background: #fff;
    color: #000;
  }

  .btnone:hover {
    background: #7c93cd;
    color: white;
  }

  section .btntwo {
    background: #4710ac;
    color: white;
  }

  .btntwo:hover {
    background: #fff;
    color: #000;
  }

  .change_content:after {
    content: "";
    animation: changetext 10s infinite linear;
    color: #4710ac;
  }

  @keyframes changetext {
    0% {
      content: "Love";
    }
    20% {
      content: "life";
    }
    35% {
      content: "joy";
    }
    60% {
      content: "blessing";
    }
    80% {
      content: "happiness";
    }
    100% {
      content: "Fuel";
    }
  }
</style>

</head>
<body>

<header>

<nav>

	<div class="logo"> <img src="https://bup.edu.bd/assets/logo-64fa6df59d79c574b53c5162ccbbb4cf3fb102f8e87eaf2fd204f03c8f0a526d.png" class="logo">
    <h1 style="font-size: 20px;"> BUP E-Wallet </h1> </div>
	<div class="menu">
		<a href="">Home</a>
		<a href="">Login</a>
		<a href="" target="_blank">Recharge </a>
		<a href="">  Loan  </a>
		<a href="">Log out</a>
	</div>
</nav>

<div class="table-responsive">

<table class="table table-bordered table-striped">

      <thead>
          <tr>
              <th>User</th>
              <th>Email</th>
              <th>Account Info</th>

          </tr>
      </thead>
      <tbody>
          <?php foreach($login_info as $wallet){ ?>
                      <tr>
                          <td><?php echo $wallet->username ?></td>
                          <td><?php echo $wallet->email ?></td>
                          <td><?php echo $wallet->usertype ?></td>


                      </tr>

                      <?php

                  } ?>
                   <tr>

</tr>
</tbody>
</table>
                </div>

</header>



</body>
</html>
