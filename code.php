<?php
include("connect.php");


//create
if(isset($_POST['signupbtn'])){
    $hname=$_POST['hindiname'];
    $ename=$_POST['engname'];
    $adharno=$_POST['adharno'];
    $adharpic=$_FILES['adharphoto']['name'];
    $adhardob=$_POST['adhardob'];
    $gender=$_POST['gender'];
    $hfname=$_POST['hfathername'];
    $efname=$_POST['efathername'];
    $rel=$_POST['relation'];
    $hadd=$_POST['haddress'];
    $eadd=$_POST['eaddress'];
    $htahsil=$_POST['htahsil'];
    $etahsil=$_POST['etahsil'];
    $hpost=$_POST['hpost'];
    $epost=$_POST['epost'];
    $hdist=$_POST['hdist'];
    $edist=$_POST['edist'];
    $hstate=$_POST['hstate'];
    $estate=$_POST['estate'];
    $pin=$_POST['pin'];
    $phone=$_POST['phone'];
    $folder="img/";
    $path=$folder.basename($adharpic);
    move_uploaded_file($_FILES['adharphoto']['tmp_name'],$path);

    if($object->insrtdata($hname,$ename,$adharno,$adharpic,$adhardob,$gender,$hfname,$efname,$rel,$hadd,$eadd,$htahsil,$etahsil,$hpost,$epost,$hdist,$edist,$hstate,$estate,$pin,$phone)){

        ?>
        <script>
            alert("Adhar created!!!");
            window.location.href="index.php";
        </script>
        <?php

    }

}

// // details


// if(isset($_POST['detailsbtn'])){
//     $adharid=$_REQUEST['id'];
//     $hfname=$_POST['hfathername'];
//     $efname=$_POST['efathername'];
//     $rel=$_POST['relation'];
//     $hadd=$_POST['haddress'];
//     $eadd=$_POST['eaddress'];
//     $htahsil=$_POST['htahsil'];
//     $etahsil=$_POST['etahsil'];
//     $hpost=$_POST['hpost'];
//     $epost=$_POST['epost'];
//     $hdist=$_POST['hdist'];
//     $edist=$_POST['edist'];
//     $hstate=$_POST['hstate'];
//     $estate=$_POST['estate'];
//     $pin=$_POST['pin'];
//     $phone=$_POST['phone'];

    
//     if($object->insrtdetails()){

//         ?>
//         <script>
//             // alert("Adhar created!!!");
//             // window.location.href="index.php";
//         </script>
//         <?php

//     }


// }





//login

if(isset($_REQUEST['loginbtn'])){
    $ename=$_POST['ename'];
    $dob=$_POST['adhardob'];

    $result=$object->userlogin($ename,$dob);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['sn']=$row['sn'];
        $_SESSION['ename']=$row['ename'];
        $_SESSION['adharno']=$row['adhar_no'];
     


        ?>
        <script>
            alert("स्वागत् है <?php echo $row['hname'];?>");
            window.location.href="adhardisplay.php";
        </script>
        <?php
    }
    else{
        ?>
         <script>
            alert("some thing is worng!!");
            window.location.href="index.php";
        </script>
        <?php
    }
}




//logout



if(isset($_REQUEST['logout'])=='adharlogout'){
    session_start();
    session_destroy();
    ?>
    <script>
        window.location.href="index.php";
    </script>
    <?php
}



//update


if(isset($_POST['updatebtn'])){
    $uphname=$_POST['hindiname'];
    $upename=$_POST['engname'];
    $upadharno=$_POST['adharno'];
    $upadharpic=$_FILES['adharphoto']['name'];
    $upadhardob=$_POST['adhardob'];
    $upgender=$_POST['gender'];
    $uphfname=$_POST['hfathername'];
    $upefname=$_POST['efathername'];
    $uprel=$_POST['relation'];
    $uphadd=$_POST['haddress'];
    $upeadd=$_POST['eaddress'];
    $uphtahsil=$_POST['htahsil'];
    $upetahsil=$_POST['etahsil'];
    $uphpost=$_POST['hpost'];
    $upepost=$_POST['epost'];
    $uphdist=$_POST['hdist'];
    $upedist=$_POST['edist'];
    $uphstate=$_POST['hstate'];
    $upestate=$_POST['estate'];
    $uppin=$_POST['pin'];
    $upphone=$_POST['phone'];
    $folder="img/";
    $path=$folder.basename($upadharpic);
    move_uploaded_file($_FILES['adharphoto']['tmp_name'],$path);
    $id=$_SESSION['sn'];
    if($object->updatedata($id,$uphname,$upename,$upadharno,$upadharpic,$upadhardob,$upgender,$uphfname,$upefname,$uprel,$uphadd,$upeadd,$uphtahsil,$upetahsil,$uphpost,$upepost,$uphdist,$upedist,$uphstate,$upestate,$uppin,$upphone)){

        ?>
        <script>
            alert("data updated!!!");
            window.location.href="adhardisplay.php";
        </script>
        <?php

    }
}