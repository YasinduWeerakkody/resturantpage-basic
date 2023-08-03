<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">-->
    <title>Pizza Website-2022</title>





    <style>

/*------------------------Home Section--------------------*/

.home {
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(back1.png) no-repeat;
    background-size: cover;
    background-position: center;
    background: url("1.jfif");

}

.home-content {
    display: grid;
    grid-template-columns: 1.2fr 1.2fr;
}

.inner-content {
    max-width: 70rem;
    margin-top: 20rem;
    text-align: center;
}

.inner-content-img {
    margin-top: 2rem;
}

.inner-content-img img {
    width: 45rem;
    height: auto;
    animation: icon 5s ease infinite;
}

.inner-content i {
    color: var(--clr4);
}





.product{
            border: 1px solid red;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        .product:hover {
            background: var(--clr4);
            transition: .4s ease all;
        }


        .product img {
            width: 20rem;
             height: auto;
        }


        .product .far {
             position: absolute;
            font-size: 2.5rem;
            margin-left: -7rem;
            color: var(--clr3);
        }



        .text-info{
            font-size: 2rem;
            padding: 3rem 0;
            font-weight: 600;
            color: var(--clr3);
            text-transform: capitalize;
        }

        .text-danger{
    font-size: 1.8rem;
    font-weight:450;
    color: var(--clr3);
    text-transform: capitalize;
        }
        

        table,th,tr{
              text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        .remove{
            color:blue;
        }
        .remove:hover{
            background: lightblue;
            transition: .4s ease all;
        }

        .butt{
            width: 15%;
            margin: 10px 10px;
    padding: 14px 15px;
    font-size: 1.5rem;
    text-transform: capitalize;
    letter-spacing: .1rem;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: .5rem;
    box-shadow: 0rem 2rem 2rem rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;

   /* background-color: #fff;
    color: white;
    padding: 14px 20px;
    margin: 8px 290px;
    border: none;
    cursor: pointer;
    width: 25%;
    ;*/
        }






      /* Full-width input fields 
        input[type=text], input[type=password] {
          width: 50%;
          padding: 10px 10px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        */
        /* Set a style for all buttons 
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }*/
        
        /* Extra styles for the cancel button */
        .cancelbtn01 {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button 
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        
        img.avatar {
          width: 40%;
          border-radius: 50%;
        }
        */
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
         /* background-color: rgb(0,0,0);  Fallback color */
         /* background-color: rgba(0,0,0,0.4);  Black w/ opacity 
         background: rgba(255, 255, 255, 0.2);
          box-shadow: 0px,4px,16px rgba(0, 0, 0, 0.5);
          transform: translate(-50%,-50%);*/
          padding-top: 60px;
          
        }
        
        /* Modal Content/Box */
        .modal-content {
          
          background-color: #fefefe86;
          
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 50%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        /*.close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }*/
        
        .cancelbtn01:hover{
          color: #970f21;
          cursor: pointer;
        }
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn01 {
             width: 100%;
          }
        }


        /*--------------------SignUp-------------------------------*/

        

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #fefefe90;
}

/* Add a background color when the inputs get focus 
input[type=text]:focus, input[type=password]:focus {
  /*background-color: #ddd;
  outline: none;
}*/

/* Set a style for all buttons */
.signupbtn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 18px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}


.signupbtn:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 10px 18px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  /*background-color: #474e5d;*/
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #f1f1f1a8;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #0a0a0a;
  cursor: pointer;
}

.cancelbtn:hover{
          color: #970f21;
          cursor: pointer;
        }

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

        </style>   
        


</head>

<body>
    <header class="head">
        <h1>Pizza&nbsp;<i class="fas fa-pizza-slice"></i>&nbsp;Zone</h1>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#service">Services</a>
            <a href="#menu">Menu</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="side-bar">
          <!-- <i class="fas fa-search" id="search"></i>
            <i class="fas fa-user" id="user"></i>
         <a href="#" class="btn">Login</a>
         <a href="#"> <button type="button" class="btn" >SignUp</button>
         </a>-->
        <i class="fas fa-bars" id="bars"></i>
    
         <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn">Login</button>
         <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="btn">Sign Up</button>

         
         
        </div>

        

       <!-- <form action="#" class="search-bar">
            <input type="search" name="search" id="1" placeholder="Search Here">
        </form>-->
           <!----------------------------------login Section---------------------------


    
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="connect.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="button">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn01">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>







<!----------------------------------signUp Section--------------------------->


<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="connect.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
      <!--
      <label for="firstName">First Name</label>
      <input
        type="text"
        class="form-control"
        id="firstName"
        name="firstName"
      />

      <label for="lastName">Last Name</label>
      <input
        type="text"
        class="form-control"
        id="lastName"
        name="lastName"
      />

      
     <!---<label for="pswrepeat">Repeat password</label>
      <input type="password"
      class="form control"
      id="password"
      name="pswrepeat">


      <label for="email"><b>Email</b></label>
      <input
        type="text"
        placeholder="Enter Email"
        id="email"
        name="email"
      />

    <label for="gender"><b>gender</b></label>
               <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male
                  </label>


                  <label for="female" class="radio-inline"
                  ><input
                    type="radio"
                    name="gender"
                    value="f"
                    id="female"
                  />Female</label
                >
                <label for="others" class="radio-inline"
                  ><input
                    type="radio"
                    name="gender"
                    value="o"
                    id="others"
                  />Others</label
                >

               

                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />



                
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                /> ---->





  <b><label for="username">User name</label></b>
      <input type="text" class="form-control" name="userName" placeholder="Choose a unique Username" >
      <b><label for="firstName">First Name:</label></b>
      <input type="text" class="form-control"  name="firstName" placeholder="First Name">
      <b><label for="lastName">Last name:</label></b>
      <input type="text" class="form-control"  name="lastName" placeholder="Last name">
      <b><label for="phone">Phone No:</label></b>
      <input type="tel" class="form-control"  name="Phone" placeholder="Enter Your Phone Number">
        <br><br>
        
      <label for="email"><b>Email</b></label>
      <input type="text" name="eMail" placeholder="Enter Email" >

      <label for="psw"><b>Password</b></label>
      <input type="password" name="Password" placeholder="Enter Password" >

      <label for="pswrepeat"><b>Repeat Password</b></label>
      <input type="password" name="pswrepeat" placeholder="Repeat Password" >
      















      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    </header>
 






    
    <!----------------------------------Home Section----------------------------->
  
    <section class="home" id="home" >
        <div class="home-content">
            <div class="inner-content">
                <h3>Welcome To Pizza&nbsp;<i class="fas fa-pizza-slice"></i>&nbsp;Zone</h3>
                <p>Pizza Hut was founded in 1958 by two Wichita State University students, Frank and Dan Carney, as a single location in Wichita, Kansas.[9] The oldest continuously operating Pizza Hut is in Manhattan, Kansas, in a shopping and tavern district known as Aggieville near Kansas State University. The first Pizza Hut restaurant east of the Mississippi was opened in Athens, Ohio in 1966 by Lawrence Berberick and Gary Meyers. </p>
                <a href="#menu"><button class="btn">Menu</button></a>
            </div>
            <div class="inner-content-img">
                <img src="3.png" alt="img">
            </div>
        </div>
    </section>

   

<!---------------------------about section--------------->
   <section class="about" id="about">
    <h4>About</h4>
    <div class="about-sec">
        <div class="img">
            <img src="6.png" alt="img">
        </div>
        <div class="about-content">
            <h3>Pizza Zone</h3>
            <p>Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Labore Repellat Doloremque Dolor Aperiam Nulla Amet Maiores Quaerat! Nobis Accusamus, Fugiat Exercitationem Assumenda Quaerat Deserunt Maxime Illo Iusto Maiores Sit Dolorem.</p>
            <div class="about-inner">
                <h5><i class="fas fa-arrow-alt-circle-right"></i>Good Quality</h5>
                <h5><i class="fas fa-arrow-alt-circle-right"></i>Fresh Vagetables</h5>
                <h5><i class="fas fa-arrow-alt-circle-right"></i>Available 24X7</h5>
                <h5><i class="fas fa-arrow-alt-circle-right"></i>Best Price</h5>
                <h5><i class="fas fa-arrow-alt-circle-right"></i>Best Quality</h5>
            </div>
            <button class="btn">Read More</button>
        </div>
    </div>
</section>
<!-----------------------------services-------------------->
<section class="service" id="service">
    <h4>Services</h4>
    <div class="service-content">
        <div class="inner-box">
            <img src="7.png" alt="">
            <h2>Free Delivery</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi Quod Iure Impedit Alias Labore Placeat Magnam Explicabo.</p>
            <button class="btn">Read More</button>
        </div>
        <div class="inner-box">
            <img src="9.png" alt="">
            <h2>Online Payment</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Excepturi Quod Iure Impedit Alias Labore Placeat Magnam Explicabo.</p>
            <button class="btn">Read More</button>
        </div>
        <div class="inner-box">
            <img src="8.png" alt="">
            <h2>Fresh Food</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Excepturi Quod Iure Impedit Alias Labore Placeat Magnam Explicabo.</p>
            <button class="btn">Read More</button>
        </div>
    </div>
</section>
<!----------------------menu----------------------
<section class="menu" id="menu">
    <h4>Our Menu</h4>
    <div class="menu-content">
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="11.png" alt="img" class="veg-icon">
            <img src="10.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Margherita Sushi Pizza</h2>
                    <div class="price">Rs.20.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="11.png" alt="img" class="veg-icon">
            <img src="12.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Italian Cuisine Tomato Pizza</h2>
                    <div class="price">Rs.20.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="11.png" alt="img" class="veg-icon">
            <img src="13.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Pepperoni Pizza</h2>
                    <div class="price">Rs.20.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="11.png" alt="img" class="veg-icon">
            <img src="14.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Hamburger Calzone Pizza</h2>
                    <div class="price">Rs.899.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="11.png" alt="img" class="veg-icon">
            <img src="15.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Tomatos Margherita Pizza</h2>
                    <div class="price">Rs.120.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="17.png" alt="img" class="veg-icon">
            <img src="16.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>California-Style,Sicilian Pizza</h2>
                    <div class="price">Rs.200.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="17.png" alt="img" class="veg-icon">
            <img src="18.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Chicken Dominator Pizza</h2>
                    <div class="price">Rs.1220.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="17.png" alt="img" class="veg-icon">
            <img src="19.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Maxican Salsa Pizza</h2>
                    <div class="price">Rs.1500.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="17.png" alt="img" class="veg-icon">
            <img src="20.png" alt="">
            <div class="in-content">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <h2>Meat Mania Pizza</h2>
                    <div class="price">Rs.$20.00</div>
                    <button class="btn">Add to Cart <i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

-->



<?php
    session_start();
    $db_name = "pizza";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="index.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
?>




    <section class="menu" id="menu">
    <h4>Our Menu</h4>
    <div class="menu-content">
    

        <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                       
                            <div class="product">
                                
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="veg-icon">
                                <h5 class="text-info"><?php echo $row["description"];?></h5>
                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                <input type="number" name="quantity" class="butt" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <!--<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">-->
                                <button class="btn" name="add">Add to Cart <i class="fas fa-plus-circle"></i></button>
                               <!-- <button class="btn" name="add">Buy<i class="fas fa-plus-circle"></i></button>-->
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>
    </section>
    
    
            
    </div>
            













<!------------------------------------Blog Section----------------->
<section id="blog" class="blog">
    <h4>Latest Blog</h4>
    <div class="inner-blog">
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="21.png" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class="fas fa-calendar"></i>20th June 2021</a>
                        <a href="#"><i class="fas fa-user"></i>Admin</a>
                    </div>

                </div>
                <div class="in-blog-content">
                    <h2>Pizza is too Good.</h2>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.</p>
                    <button class="btn">Read More</button>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="22.png" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class="fas fa-calendar"></i>20th June 2021</a>
                        <a href="#"><i class="fas fa-user"></i>Admin</a>
                    </div>

                </div>
                <div class="in-blog-content">
                    <h2>Amazing Pizza,Best Quality</h2>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.</p>
                    <button class="btn">Read More</button>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="23.png" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class="fas fa-calendar"></i>20th June 2021</a>
                        <a href="#"><i class="fas fa-user"></i>Admin</a>
                    </div>

                </div>
                <div class="in-blog-content">
                    <h2>Yummy Pizza, We Loved It.</h2>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.</p>
                    <button class="btn">Read More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------------------------------contact Section-------------->
<footer class="contact" id="contact" >
    <div class="contact-sec">
        <div class="contact-inner">
            <div class="contact-inner-col">
                <img src="24.png" alt="img" class="image">
            </div>
            <div class="contact-inner-col">
                <h1>Contact US&nbsp;<i class="fas fa-paper-plane"></i></h1>
                <p>Colombo Street,Vito Pizza,Kandy,CA 9415326 123-456-7823
                </p>
                <p>We Want To Hear From You, Write Us:</p>
                <form  action="contact.php" method="post">
                    <input type="text" name="name" id=" " placeholder="Please Enter Your Name:" required>
                    <input type="email" name="name" id=" " placeholder="Please Enter Your Mail:" required>
                    <input type="text" name="name" id=" " placeholder="Please Enter Your Phone-No: " required>
                    <textarea name="" id="" cols="10" rows="8" placeholder="Please put Your comment & suggetion;"></textarea>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5888817360387!2d80.63994851474537!3d7.287527794740092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368d74773ca09%3A0x232bd2026f0e736f!2sVito%20Wood%20Fired%20Pizza!5e0!3m2!1sen!2sin!4v1668285893022!5m2!1sen!2sin"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="footer">
            <p>Copyright © 2021 Design By @yasinduweerakkody-2018ICTS55</p>
          <!--  <div class="social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest"></i>
                <i class="fab fa-google-plus"></i>
            </div>-->
        </div>
    </div>
</footer>
 





<!-------------------------------java script ------------->
<script>
    let searchbtn = document.querySelector('#search');
    let searchfrm = document.querySelector('.head .search-bar');

    searchbtn.onclick = () => {
        searchfrm.classList.toggle('active');
        menu.classList.remove('active');
    }

    let menu = document.querySelector('.head .navbar');
    document.querySelector('#bars').onclick = () => {
        menu.classList.toggle('active');
        searchfrm.classList.remove('active');

    }
    window.onscroll = () => {
        menu.classList.remove('active');
        searchfrm.classList.remove('active');
    }
</script>

</body>
</html>