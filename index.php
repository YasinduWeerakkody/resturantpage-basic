<?php
    session_start();
    $db_name = "shopping";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <style>
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



    </style>
</head>
<body>

    
    <section class='menu' id="menu">
        <div style="clear: both"></div>
        <h4>Shopping Cart Details</h4>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="10%">Price Details</th>
                <th width="20%">Total Price</th>
                <th width="30%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="remove">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </section>
            
    </div>


    <?php

                //registration table

    include 'config.php';
    $sql = "select * from registration";

$result = $connection->query($sql);

if($result->num_rows > 0){

        echo "Registration form";

    echo "<table border = 1>";
    echo "<tr>
        <th>userName</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>PasswordRepeat</th>
        <tr>";

        while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>".$row["username"]."</td>
                <td>".$row["first_name"]."</td>
                <td>".$row["last_name"]."</td>
                <td>".$row["phone_no"]."</td>
                <td>".$row["Email"]."</td>
                <td>".$row["password"]."</td>
                <td>".$row["repeat_password"]."</td>
                </tr>";
        }
}

else{
    echo "empty table";
}


    ?>
    
 
</body>
</html>