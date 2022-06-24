<?php include "pro_db.php";?>
<?php include('utils/init.php') ?>
<?php include "utils/selectpro.php";mysqli_close($conn);?>
<?php include "admin.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>myAASTU - Products and Services</title>
</head>

<body>
    <?php include("nav.php"); ?>
    <!-- main body -->
    <main class="container">
    <?php
if(isset($_SESSION['status']))
{
    echo $_SESSION['status'];
    unset($_SESSION['status']);
}
?>
        <h1>Product and services.</h1>
        <?php
        if (isset($_SESSION['user']) and $_SESSION['user']['username'] == 'admin'){
                                echo "<div><a href='uiadmin.php?'><input type = 'button' name = 'Add' value = 'Add'></a></div><br>";
                            }
                            ?>

        <ul class="remove-dot">
            <li>
                <a href = "#menu"><img src="images/menu.png" class="product-img"></a>Menu Lists
            </li>
            <li>
                <a href="#TL"><img src="images/injera.png" class="product-img"></a>Teacher's Lounge
            </li>
            <li>
                <a href="#KNL"><img src="images/injera1.png" class="product-img"></a>Kibnesh Lounge
            </li>
        </ul>
        <ul class="remove-dot">
            <li>
                <a href="#KK"><img src="images/rice.png" class="product-img"></a>KK
            </li>
            <li>
                <a href="#JH"><img src="images/juice.png" class="product-img"></a>Juice House
            </li>
            <li>
                <a href = "#OP"><img src="images/other.jpg" class="product-img"></a>Other Services</li>
            </li>
        </ul>

        <div id="TL" name="TL">
            <h2>Teacher's Lounge</h2>
            <p>It gives the best service and the wide variety food makes it one of the best in the compound. Open till 4:00PM.</p>
            <p id="revealhidden"> Students aren't allowed in at Lunch time between 6:00-8:00 LT.
                <p id="hidden">*only open for the staffs </p>
            </p>
            
            <p>
                <a target="_blank" href="https://www.google.com/maps/dir//''/@8.8834109,38.8098411,549m/data=!3m1!1e3!4m9!4m8!1m0!1m5!1m1!1s0x164b79cdb6c1b8e3:0xc1e4e44076646a6d!2m2!1d38.8116876!2d8.8839953!3e2?hl=en-US">
                    <button class="button" valign="center"><span>Press</span></button></a> to go to Teacher's Lounge.
            </p>
        </div>

        <div id="KNL" name="KNL">
            <h2>Kibnesh Lounge</h2>
            <p>Being near to the learning classes it is the one of the best choice for the studnets. Students are allowed to eat during all the open hours. Open till 4:00PM L.T.
            </p>
           
            <p>
                <a target="_blank" href="https://www.google.com/maps/dir//''/@8.8862922,38.7756544,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x164b837c09dee131:0x77bdd22985b0bba3!2m2!1d38.8105609!2d8.8862882!3e2?hl=en-US" target="_blank">
                    <button class="button" valign="center"><span>Press</span></button></a> to go to Kibnesh Lounge.
            </p>
        </div>

        <div id="KK" name="KK">
            <h2>KK</h2>
            <p>KK is know for its fast foods and juices.Open till 4:30PM L.T.
            </p>
            
            <p>
                <a target="_blank" href="https://www.google.com/maps/dir//8.8870966,38.8102242/@8.8958205,38.7907551,13088m/data=!3m2!1e3!4b1!4m2!4m1!3e2?hl=en-US">
                    <button class="button" valign="center"><span>Press</span></button></a> to go to KK.
                </p>
        </div>
        
        <div id="JH" name="JH">
            <h2>Juice House</h2>
            <p>Juice house is a place to have fast food and juices.Open till 4:30PM L.T.
            </p>
            
            <p>
                <a target="_blank" href="https://www.google.com/maps/dir//8.887126,38.8102957/@8.8869657,38.8100172,98m/data=!3m1!1e3!4m2!4m1!3e2?hl=en-US">
                    <button class="button" valign="center"><span>Press</span></button></a> to go to Juice House.
                </p>
                <div id = "OP"></div>
                <?php foreach($services as $sevice){ 
                    if ($sevice['prod_description'] != NULL)
                    {
                        ?>
                    <h3><?php echo $sevice['servicegiver']?></h3>
                    <p><?php echo $sevice['prod_description']?></p>
                    <a target = _blank href="<?php echo htmlspecialchars($sevice['prod_address'])?>">
                    <button class = "button" valign = "center"><span>Press</span></button></a> to go to <?php echo $sevice['servicegiver'];?>

                    
                    <?php }} ?>
                <div id = "menu"></div>
                <details>
                   
                <Summary>The daily menu is:</Summary>
                
                <div class="container">
                    <div class="row">
                        
                        <?php foreach($services as $sevice){ ?>
                            <h3 style = "color: #9844ff"><?php echo $sevice['servicegiver']; 
                            if (isset($_SESSION['user']) and $_SESSION['user']['username'] == 'admin'){
                                $id = $sevice['id'];
                                echo "\t<a href='admin.php?id=$id'><input type = 'button' class = 'button' name = 'delete' class = 'bott' value = 'Remove'></a>";                            }
                            ?></h3>
                            <div class="col" style ="color: rgb(100,55,240)">
                                <div class="event-card z-depth-0">
                                
                                
                                    
                                    <div>
                                        
                                        <ul class="remove-dot">
                                        <?php 
                                        if ($sevice['secondproduct'] != NULL) 
                                        echo "<h3 colspan='3'>"."Breakfast"."</h3>";
                                        else
                                        echo "<h3>"."Food And Drinks"."</h3>";
                                        ?>
                                           <?php foreach(explode(',',$sevice['firstproduct']) as $servt): ?>
                                            <li><?php echo htmlspecialchars($servt); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        
                                       
                                    </div>
                                    <div>
                                    <ul class="remove-dot">
                                        <h3>Price</h3>
                                           <?php foreach(explode(',',$sevice['price1']) as $servt): ?>
                                            <li><?php echo htmlspecialchars($servt); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="remove-dot">
                                        <?php 
                                        if ($sevice['secondproduct'] != NULL) 
                                        echo "<h3 colspan='3'>"."Lunch and Dinner"."</h3>";
                                        ?>
                                    
                                    <?php foreach(explode(',',$sevice['secondproduct']) as $servt): ?>
                                            <li><?php echo htmlspecialchars($servt); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div>
                                    <ul class="remove-dot">
                                    <?php 
                                        if ($sevice['secondproduct'] != NULL) 
                                        echo "<h3 colspan='3'>"."Price"."</h3>";
                                        ?>
                                        
                                        <?php foreach(explode(',',$sevice['price2']) as $servt): ?>
                                            <li><?php echo htmlspecialchars($servt); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        </div>
                                    </div>
                            </div>
                            <?php } ?>
                    </div>
                </div>
                </details>
        </div>
        <h3>Posts</h3>
        <ul>
            <li><a href="articles/why_join_aastu.html">Top 5 reasons why you should join AASTU</a></li>
            <li><a href="articles/time_mgt.html">Time management Tips</a></li>
        </ul>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>