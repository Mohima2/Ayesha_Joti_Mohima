<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Registration</title>

    <style>
    *{
    margin: 0;
    padding:0;
}
.container{
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
    background: rgba(142, 160, 110, 0.747);
    background-image: url(https://bup.edu.bd/on-campus/all?item_id=5);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content:center;
}
.card{
    width: 350px;
    height: 500px;
    box-shadow: 0 0 40px 20px rgba(0,0,0,0.26);
    perspective: 1000px;

}
.inner-box{
    position:relative;
    width: 100%;
    height: 100%;
    transition: transform 2s;
    transform-style: preserve-3d;

}
.card-front, .card-back{
    position: absolute;
    width: 100%;
    height: 100%;
    background-position: center ;
    background-size: cover;
    background-image: linear-gradient(rgba(0,0,100,0.8),rgba(0,0,100,0.8),url(card_02.jpg));
    padding: 55px;
    box-sizing: border-box;
    backface-visibility:hidden;
}
.card-back{
    transform: rotateY(180deg);
}
.card h2{
    font-weight: normal;
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
}

.input-box{
    width: 100%;
    background: transparent;
    border: 1px solid #fff;
    margin: 6px 0;
    height: 32px;
    border-radius: 20px;
    padding: 0 10px;
    box-sizing: border-box;
    outline: none;
    text-align: center;
    color: #fff;
}

::placeholder{
    color: #fff;
    font-size: 12px;
}
button{
    width: 100%;
    background: transparent;
    border: 0 10px #fff;
    margin: 35px 0 10px;
    height: 32px;
    font-size: 12px;
    border-radius: 20px;
    padding: 0 10px;
    box-sizing: border-box;
    outline: none;
    color: #fff;
    cursor: pointer;
}

.submit-btn{
    position: relative;
}

span{
    font-size: 13px;
    margin-left: 10px;
}
.card .btn{
    margin-top: 70px;
}


.card a{
    color: #fff;
    text-decoration: none;
    display: block;
    text-align: center;
    font-size: 13px;
    margin-top: 8px;
}
</style>
</head>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Registration</title>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">

                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="<?php echo url('wallet/show') ?>" method="GET">
                    <?php echo csrf_field(); ?>
                        <input type="text" class="input-box" placeholder="User ID" name="username" required>
                        <input type="password" class="input-box" placeholder="Password" name="password" required>
                        <button type="submit" class="submit-btn" name="login">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>

                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                    <a href="">Forget Password</a>
                </div>

                <div class="card-back">
                    <h2>Register</h2>
                    <form action="<?php echo url('wallet/store') ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <input type="text" class="input-box" placeholder="User Id" name="username" required>
                        <table>
                        <tr>
					<th height="40">
						<label for="usertype">User Type</label>
					</th>
					<td><select name="usertype"
						id="usertype" required>
							<option value="">
								Select User
							</option>
							<option value="user">
								Student
							</option>
							<option value="admin">
								Admin
							</option>
						</select>
					</td>
				</tr>
                        </table>
                         <input type="email" class="input-box" placeholder="Email Id" name="email" required>
                        <input type="password" class="input-box" placeholder="Password" name="password" required>
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">Already have an account?</button>


                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform="rotateY(-180deg)";
        }

        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }

    </script>

</body>
</html>
