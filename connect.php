<?php


    class link {
        function __construct(){
            $this->connect=mysqli_connect("localhost","root","","adhar");
            session_start();
        }
        function insrtdata($hname,$ename,$adharno,$adharpic,$adhardob,$gender,$hfname,$efname,$rel,$hadd,$eadd,$htahsil,$etahsil,$hpost,$epost,$hdist,$edist,$hstate,$estate,$pin,$phone){
            $sql="INSERT INTO `data`(`hname`, `ename`, `adhar_no`, `photo`, `dob`, `gender`, `relation`, `f/h_hindi_name`, `f/h_eng_name`, `hindi_address`, `eng_address`, `h_tahasil`, `e_tahasil`, `h_post`, `e_post`, `h_district`, `e_district`, `h_state`, `e_state`, `pin_code`, `phone`) VALUES ('$hname','$ename','$adharno','$adharpic','$adhardob','$gender','$rel','$hfname','$efname','$hadd','$eadd','$htahsil','$etahsil','$hpost','$epost','$hdist','$edist','$hstate','$estate','$pin','$phone')";
            return mysqli_query($this->connect,$sql);
        }

        

        function userlogin($ename,$dob){
            $sql="SELECT * FROM data WHERE ename='$ename' AND dob='$dob'";
            return mysqli_query($this->connect,$sql);
        }

        function display($ename,$adharno){
            $sql="SELECT * FROM data WHERE ename='$ename' AND adhar_no='$adharno'";
            return mysqli_query($this->connect,$sql);
        }

        function edit($editid){
            $sql="SELECT * FROM data WHERE adhar_no='$editid'";
            return mysqli_query($this->connect,$sql);
        }

        function updatedata($id,$uphname,$upename,$upadharno,$upadharpic,$upadhardob,$upgender,$uphfname,$upefname,$uprel,$uphadd,$upeadd,$uphtahsil,$upetahsil,$uphpost,$upepost,$uphdist,$upedist,$uphstate,$upestate,$uppin,$upphone){
            $sql="UPDATE `data` SET `hname`='$uphname',`ename`='$upename',`adhar_no`='$upadharno',`photo`='$upadharpic',`dob`='$upadhardob',`gender`='$upgender',`relation`='$uprel',`f/h_hindi_name`='$uphfname',`f/h_eng_name`='$upefname',`hindi_address`='$uphadd',`eng_address`='$upeadd',`h_tahasil`='$uphtahsil',`e_tahasil`='$upetahsil',`h_post`='$uphpost',`e_post`='$upepost',`h_district`='$uphdist',`e_district`='$upedist',`h_state`='$uphstate',`e_state`='$upestate',`pin_code`='$uppin',`phone`='$upphone' WHERE `sn`='$id'";
            return mysqli_query($this->connect,$sql);
        }
    }

    $object= new link();


    ?>