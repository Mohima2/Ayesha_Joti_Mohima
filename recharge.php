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
    background-image: linear-gradient(rgba(68, 109, 190, 0.516), rgba(0, 0, 0, 0.15)),
        url("#");
    background-repeat: no-repeat;
    background-size: cover;
  }

  nav {
    width: 100%;
    height: 15vh;
    background: rgba(0, 0, 0, 0.2);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
  }

  nav .logo {
    width: 25%;
    text-align: center;
    /*background: red;*/
  }

  nav .menu {
    width: 40%;
    display: flex;
    justify-content: space-around;
  }

  nav .menu a {
    width: 25%;
    text-decoration: none;
    color: white;
    font-weight: bold;
  }

  nav .menu a:first-child {
    color: #00b894;
  }

  main {
    width: 100%;
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  section h3 {
    font-size: 35px;
    font-weight: 200;
    letter-spacing: 3px;
    text-shadow: 1px 1px 2px black;
  }

  section h1 {
    margin: 30px 0 20px 0;
    font-size: 55px;
    font-weight: 700;
    text-shadow: 2px 1px 5px black;
    text-transform: uppercase;
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
    background: #4710ac;
    color: #fff;
  }

  .btnone:hover {
    background: #fff;
    color: #000;
  }

  section .btntwo {
    background: #4710ac;
    color: #fff;
  }

  .btntwo:hover {
    background: #fff;
    color: #000;
  }


  .btnthree:hover {
    background: #fff;
    color: #000;
  }

  section .btnthree {
    background: #4710ac;
    color: #fff;
  }



 
    </style>
</head>
<body>

<header>



	<main>
		<section>
			<h3>Recharge Options</h3>
        </br>
    </br>
			<p></p><a href="" class="btnone">B-kash</a> </p>
			<p></p><a href="" class="btntwo">T-kash</a> </p>
            <a href="" class="btnthree">Nagad</a>
		</section>
	</main>


</header>

</body>
</html>
