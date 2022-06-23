<?php include "utils/db.php";?>

<?php
$sername=$desc=$break=$pri1=$pri2=$lun= '';
$addr='#';
$servetime = "BreakFast,Lunch And Dinner";
$errors = array('servicegiver'=>'','firstproduct'=>'','price1'=>'');
if (isset($_REQUEST['add']))
{
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (empty($_REQUEST['servicename'])) {
        $errors['sername'] = "Can not leave this empty<br>";
    }
    else
    {
    $sername = $_REQUEST['servicename'];
    }
    $desc = $_REQUEST['description'];
    if(empty($_REQUEST['servetime1']))
    {
        $errors['servetime1'] = "can not leave this empty<br>";

    }
    else
    {
    $break = $_REQUEST['servetime1'];
    }
    $lun = $_REQUEST['servetime2'];
    if($_REQUEST['price1'] == NULL)
    {
        $errors['price1'] = "can not leave this empty<br>";
    }
    else
    {
        $pri1 = $_REQUEST['price1'];
    }
    $pri2 = $_REQUEST['price2'];

    $addr =$_REQUEST['address'];
}
if($lun == NULL)
{
    $servetime = "Food And Drinks";
}
if (array_filter($errors))
{
    echo "query error: ". mysqli_error($conn);
}
else
{   
    $sername = mysqli_real_escape_string($conn,$sername);
    $desc = mysqli_real_escape_string($conn,$desc); 
    $break = mysqli_real_escape_string($conn,$break);
    $lun = mysqli_real_escape_string($conn,$lun);
    $pri1 = mysqli_real_escape_string($conn,$pri1);
    $pri2 = mysqli_real_escape_string($conn,$pri2);

    $sql = "INSERT INTO service(servicegiver, description, servetime, firstproduct, price1, secondproduct, price2,address) VALUES('$sername','$desc','$servetime','$break','$pri1','$lun','$pri2','$addr');";
if (mysqli_query($conn,$sql))
{
    header('Location: product.php');
    
}
else
{
echo "query error: ". mysqli_error($conn);
} 
}   
}
else if (isset($_REQUEST['delete']))
{
    
    $id_to_delete = $_REQUEST['idno'];  
        $sql = "DELETE FROM service WHERE id =  '$id_to_delete'";
        
        $stat = mysqli_query($conn,$sql);
        if ($stat)
        {
             $_SESSION['status'] = '<h3 style="color:blue">Deleted Data Successfully</h3>';
             header("Location: uiadmin.php");
        }
        else
        {
            $_SESSION['status'] = '<h3 style="color:red">Failure to Delete</h3>';
            header("Location: uiadmin.php");
        }
}  



$conn->close();
?>