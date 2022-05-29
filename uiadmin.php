
<?php include 'pro_db.php'?>
<?php include 'admin.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php') ?> 
    <title>Log In - myAASTU</title>
</head>
<body>
    <?php include('nav.php');?>
    <main class="container">
<?php
if(isset($_SESSION['status']))
{
    echo $_SESSION['status'];
    unset($_SESSION['status']);
}
?>
    <details>
        <summary>Add Data</summary>
        <div class = "form-container">
        
        <form method="post" action = "admin.php" >
            <br>
        <label>Service Giver *</label>
          
        <input type = "text" name="servicename" class = "form-input" required>
        
        <label>Service Description</label>
            
        <input type = "text" name="description" class = "form-input">
         
        <label>First Meal (comma separated list) *</label>  
        
        <input type = "text" name="servetime1" class = "form-input" required>
        
        <label>Price for First Meal (comma separated list) *</label>
            
        <input type = "text" name="price1" class = "form-input" required>
        
        <label>Lunch and Dinner (comma separated list)</label>
            
        <input type = "text" name="servetime2" class = "form-input">
        
        <label>Price for Lunch and Dinner (comma separated list)</label>
           
        <input type = "text" name="price2" class = "form-input">
        
        <label>Map Address of the place</label>
         
        <input type = "text" name="address" class = "form-input">
        
        <h3 style="color:rgb(240,10,50)">PLEASE DO A DOUBLE CHECK BEFORE SUBMITTING!!!</h3>
       
        <input type = "submit" name = "add" value="SUBMIT" class = "button">
    </form>
    
</div>

    </details>
    <br> 
    <details>
        <summary>Delete A Record</summary>
        <div class = "form-container">
            
            
        <form method = "post" action = "admin.php" class="form">
            <br>
            <label>Input the <b>ID</b> of the product/service you wish to delete</label>
           
            <input type = "number" min = 0 name = 'idno' class = "form-input">
            <h3 style="color:rgb(240,10,50)">YOU ARE ABOUT TO DELETE A PRODUCT!!!</h3>
            <input type = "submit" name = "delete" value = "DELETE" class = "button">
        </form>
        
        </div>
    </details>

    </main>
    <?php include('footer.php');?>
</body>
</html>