<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--#002b5b-->
<style type="text/css">
@media screen and (min-width: 600px)
{
 .logo {
    height: 10%;
    float: left;
    /*background: #002b5b;*/
    position: relative;
    z-index: 70;
    padding-top: 5px;
    margin-top: -3px;
    height: 10%;
}
/*.background-image {
    filter: blur(8px);*/
.formerly{
    background-color: #d84b37;
    display: block;
    text-align: center;
    /* border: 2px solid green;; */
    /*border-radius: 5px;*/
    padding: 5px;
    font-family: 'Playfair Display', serif;

}
	h1{

    /* background: #002b5b;
    display:block;
    margin: auto;
    text-align: center;
    width: auto;
    padding: 40px 34px; */
    /* border: 2px solid yellow; */
    background-color: #002b5b;
    margin: auto;
    text-align: center;
    padding: 20px 14px;
    width: auto;
    color: white;
    font-family: Lucida Sans Unicode;
    border-radius: 0px;
    z-index: -3;
    font-family: 'Playfair Display', serif;


}

	body{
	/*background-image: url("https://images.app.goo.gl/VpphExmRjxFuyqqK7"); */
	background-image: url("front pgec.jpeg");
	opacity: 1;
	text-align: center;
	padding:30px;
	padding-left: 400px;
	background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    padding: 0px;
	}
	.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.register{
	width: 800px;
	float: right;

}
}
@media screen and (min-width: 200px)
{
    .formerly{
    background-color: #d84b37;
    display: block;
    text-align: center;
    /* border: 2px solid green;; */
    /*border-radius: 5px;*/
    padding: 5px;
    font-family: 'Playfair Display', serif;

}
h1{

    /* background: #002b5b;
    display:block;
    margin: auto;
    text-align: center;
    width: auto;
    padding: 40px 34px; */
    /* border: 2px solid yellow; */
    background-color: #002b5b;
    margin: auto;
    text-align: center;
    padding: 20px 14px;
    width: auto;
    color: white;
    font-family: Lucida Sans Unicode;
    border-radius: 0px;
    z-index: -3;
    font-family: 'Playfair Display', serif;


}
body
{
    background-color: #add8e6;
}
.register
{
    padding: 3%;
}
.form-group
{
    padding-left: 3%; 
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.logo {
    height: 10%;
    float: left;
    /*background: #002b5b;*/
    position: relative;
    z-index: 70;
    padding-top: 5px;
    margin-top: -3px;
    height: 10%;
}
}
</style>
<script type="text/javascript">
	function add(){
	$(profile).toggleClass("tab-pane fade showt active",switch)
}
</script>
</head>
<body>
<?php include 'sigcon.php' ?>
<form method="POST">
<!---<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 Include the above in your HEAD tag ---------->
<!---<h1>RAMKRISHNA MAHATO GOVERNMENT ENGINEERING COLLEGE</h1>-->
<!--<img src="front pgec.jpeg" alt="Girl in a jacket" width="100%" height="100%">https://rkmgec.ac.in/images/essentials/embb-min.png-->
<div class="background-image"></div>
<header class="head">
        <header class="head">
        <div class="logo">
            <img class="floatleft" src="ece logo.jpg" height="83px" width="85px" alt="LOGO">
            </div>
        <h1>Ramkrishna Mahato Government Engineering College , Purulia (ECE)</h1>
        <div class="clearfix"></div>

        <div class="formerly">Fomarly Purulia Government Engineerig College</div>
</header>
<marquee>WELLCOME TO OUR PAGE!! also visit <a href="#">OFFICIAL PAGE</a></marquee>
<div class="register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from having a great experience with us!</p>
                        <!--<input type="submit" name="" onsubmit="add()" value="Login"/><br/>-->
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">New to web page register now!!</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="funame"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="luname"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="pass"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="cpass"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="Email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" name="phno" />
                                        </div>
                                        <div class="form-group">
                                            <!---<select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="Email" />-->
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sequrity Sentence *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register" name="submitt" />
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Already a user login here!!</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">-->
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="em" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="passw" />
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>-->
                                        <div class="col-md-6">
                                        	<input type="submit" class="btnRegister"  value="Login" name="submit" />
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>--->
                                        <div class="form-group">
                                            <!---<select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>-->
                                        </div>
                                        <!---<div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Login"/>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </form>
</body>
</html>