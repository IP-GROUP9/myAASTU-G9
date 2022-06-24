<?php include 'utils/db.php';
include 'admin.php';
include_once('utils/init.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('head.php') ?>
    <title>Control DataBase</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <main class="container">
        <?php
        if (isset($_SESSION['status'])) {
            echo $_SESSION['status'];
            unset($_SESSION['status']);
        }
        ?>

        <div align="center">
            To Update click: <input type="checkbox" id="myCheck" name="update" onclick="revealhide()">
        </div>
        <div style="color: blue; font-weight: bold">
            <h3 id="hidetxt" align="center">Add Data</h3>
            <h3 id="revealtxt" style="display:none" align="center">Update Data</h3>
        </div>
        <div class="form-container">

            <form method="post" action="admin.php">
                <br>
                <label style="display:none" id="idnolabel">ID</label>
                <input type="number" id="idno" name="idno" style="display:none" class="form-input" min=1>
                <br>
                <label>Service Giver</label>

                <input type="text" name="servicename" class="form-input" required>

                <label>Service Description</label>

                <input type="text" name="description" class="form-input">

                <label>First Meal (comma separated list)</label>

                <input type="text" name="servetime1" class="form-input" required>

                <label>Price for First Meal (comma separated list)</label>

                <input type="text" name="price1" class="form-input" required>

                <label>Lunch and Dinner (comma separated list)</label>

                <input type="text" name="servetime2" class="form-input">

                <label>Price for Lunch and Dinner (comma separated list)</label>

                <input type="text" name="price2" class="form-input">

                <label>Map Address of the place</label>

                <input type="text" name="address" class="form-input">

                <h3 style="color:rgb(240,10,50)">PLEASE DO A DOUBLE CHECK BEFORE SUBMITTING!!!</h3>

                <input type="submit" name="add_update" value="SUBMIT" class="button">
            </form>

        </div>


        <br>
        <p style="color:blue; font-size:22px; font-weight:bold" align="center">Delete A Record
        <p>
        <div class="form-container">


            <form method="post" action="admin.php" class="form">
                <br>
                <label>Input the <b>ID</b> of the product/service you wish to delete</label>

                <input type="number" min=0 name='idno' class="form-input">
                <h3 style="color:rgb(240,10,50)">YOU ARE ABOUT TO DELETE A PRODUCT!!!</h3>
                <input type="submit" name="delete" value="DELETE" class="button">
            </form>

        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>