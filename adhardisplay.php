<?php

    include("connect.php");


    if (!isset($_SESSION['adharno'])) {
    ?>
<script>
    window.location.href = "index.php";
</script>
<?php
    } else {
        $result = $object->display($_SESSION['ename'], $_SESSION['adharno']);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);



            function creatqr1($qrname)
            {
                $folder = "qr_code/";
                $name = 'QR_' . md5($qrname) . '.png';
                $url = $folder . basename($name);
                QRcode::png($qrname, $url);

        ?>
<img src="<?php echo $url; ?>" class="qrimg" width="200px" height="200px" alt="">
<?php
            }




            //dob formet

            $date = date_create($row['dob']);
            $date1 = date_format($date, "d/m/Y");



            //adhar no. formet

            // $ano=explode(' ',$_SESSION['adharno']);
            // $ano1=implode(',',$ano);
            // // for($i=0,$j=0; (count($ano)+3)>$i; $i++,$j++){
            // // //     if($i%4==0){
            // // //         $ano[$i]
            // // //     }
            // // // }

            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        /* scroll-snap-type: none; */
    }
    .adhar{
        perspective: 700px;
        /* height: 60px; */
        width: 1010px;
        margin: auto;
        /* border: 1px solid; */
        margin-top: 100px;

    }
    .container {
        position: relative;
        /* width: fit-content; */
        height: 610px;
        /* border: 1px solid red; */
        transform-style: preserve-3d;
        transition: transform 1s;

    }
    .flip {
        position: absolute;
        inset: 0;
        background-color: #fff;
        /* display: grid; */
        /* grid-template-rows: 180px 1fr; */
        backface-visibility: hidden;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    .front,
    .back {
        border: 2px solid rgb(148, 136, 136);
        border-radius: 10px;
        width: 1000px;
        height: 600px;
        margin: auto;
        background-image: linear-gradient(rgba(250, 161, 73, 0.407), rgba(255, 255, 255, 0.214), rgba(112, 242, 112, 0.336));
    }

   

    

    .adhar:hover .container {
        transform: rotateY(-180deg);
    }

    .back {
        transform: rotateY(180deg);
    }

    header {
        /* border: 1px solid rebeccapurple; */
        height: 150px;
        width: auto;
        display: flex;
    }

    .ask {
        position: relative;
        /* border: 1px solid; */
        width: 150px;
        margin: 5px 20px;
    }

    .ask img {
        height: 140px;
        display: block;
        margin: auto;
    }

    .flg {
        height: 140px;
        width: 550px;
        margin: 5px 10px;
        /* border: 1px solid red; */
    }

    .flg img {
        height: 130px;
        z-index: 1;
        width: 600px;
        mix-blend-mode: darken;
        margin-left: -20px;
        /* position: r; */

    }

    .flg .title {
        font-size: 25px;
        line-height: 53px;
        margin: -115px -10px;
        width: 450px;
        z-index: 1;
        text-align: center;

    }

    .udi {
        position: relative;
        width: 170px;
        margin: 5px;
        margin-left: 30px;
        /* border: 1px solid green; */
    }

    .udi img {
        height: 120px;
        margin-top: 10px;
    }

    .data {
        /* border: 2px solid red; */
        display: flex;
        width: auto;
        height: 270px;
        padding-top: 10px;
    }

    .pic {
        height: 200px;
        width: 170px;
        /* border: 1px solid rgb(233, 140, 140); */
        margin: 30px 50px;
        margin-left: 100px;
    }

    .pic img {
        /* border: 1px solid; */
        height: 100%;
        width: 100%;
        display: block;
        margin: auto;
    }

    .dtl {
        height: 150px;
        width: 370px;
        /* border: 1px solid; */
        margin: 40px 0;
    }

    .name {
        /* border: 1px solid purple; */
        font-size: 25px;
        line-height: 30px;
        height: 60px;
    }

    .dob {
        font-size: 22px;
        /* border: 1px solid violet; */
        margin: 10px 0;
    }

    .gender {
        font-size: 20px;
        /* border: 1px solid violet; */
    }

    .qrcode {
        height: 220px;
        width: 220px;
        margin: 30px 0px;
        margin-left: 50px;
        /* z-index: -1; */
        /* border: 1px solid violet; */

    }

    .qrimg {
        /* border: 1px solid; */
        mix-blend-mode: darken;
        height: 100%;
        width: 100%;
        display: block;
        margin: auto;
    }

    .adharno {
        height: 60px;
        text-align: center;
        width: 500px;
        margin: 10px auto;
        margin-bottom: 5px;
        font-size: 50px;
        letter-spacing: 5px;
        /* border: 1px solid purple; */

    }

    footer {
        height: 70px;
        /* border: 1px solid purple; */
    }

    footer .mera {
        width: fit-content;
        margin: auto;
        font-size: 50px;

    }

    .button {
        margin: auto;
        /* display: block; */
        margin-top:10px;
        /* border: 1px solid; */
        width: 190px;
        height: 40px;
        padding: 10px;
    }

    .btn {
        text-decoration: none;
        padding: 5px 10px;
        font-size: 20px;
        outline: 2px solid antiquewhite;
        outline-offset: -5px;

        margin: auto;


    }

    .logout {
        background-color: rgb(253, 147, 147);

        color: antiquewhite;
    }

    .logout:hover {
        background-color: red;

    }

    .update {
        background-color: rgb(142, 209, 251);
        color: antiquewhite;
    }

    .update:hover {
        background-color: rgb(15, 118, 244);

    }

    .flg .titleback {
        font-size: 23px;
        line-height: 53px;
        letter-spacing: 1px;
        margin: -115px 10px;
        width: 520px;
        /* text-align: center; */

    }

    .address {
        height: 250px;

        width: 500px;
        /* border: 1px solid; */
        margin: 20px 50px;
    }

    .address .hadd {
        font-size: 20px;
        /* border: 1px solid red; */
        height: 50%;
    }

    .address .eadd {
        font-size: 20px;
        /* border: 1px solid red; */
        height: 50%;
    }

    /* .footer{
    
    border: 1px solid;

} */
    footer ul {
        display: grid;
        grid-template-columns: 1.5fr 2fr 2fr;
        justify-content: space-around;
        align-items: center;
        margin-top: 13px;
    }

    footer ul li {
        list-style: none;
        font-size: 37px;
        border-left: 3px solid;
        text-align: center;
    }

    .udaino {
        border: none;
    }
    .barcode{
        /* border: 1px solid; */
        width: 300px;
        height: 200px;
        margin: auto;
    }
    .barcode img{
        height: 100%;
        width: 100%;
        mix-blend-mode: darken;
    }
</style>

<body>
    <div class="adhar">
        <div class="container">
            <div class="front flip">
                <header>
                    <div class="ask">
                        <img src="img/asok_1.png" alt="">
                    </div>
                    <div class="flg">
                        <img src="img/flag.jpg" alt="">
                        <div class="title">
                            <h3>भारत सरकार <br>GOVERNMENT of INDIA</h3>
                        </div>
                    </div>
                    <div class="udi">
                        <img src="img/Aadhaar_Logo.png" alt="">
                    </div>
                </header>
                <hr style="color: rgb(234, 167, 22); margin:10px; height: 2px;">
                <div class="data">
                    <div class="pic">
                        <img src="img/<?php echo $row['photo']; ?>" alt="">
                    </div>
                    <div class="dtl">
                        <h4 class="name">
                            <?php echo $row['hname']; ?> <br>
                            <?php echo $row['ename']; ?>
                        </h4>
                        <h4 class="dob">जन्म तिथि/D.O.B. -
                            <?php echo $date1; ?>
                        </h4>
                        <h4 class="gender">
                            <?php echo $row['gender']; ?>
                        </h4>
                    </div>
                    <div class="qrcode">

                        <?php
                            include("qrcode/qrlib.php");
                            creatqr1($row['ename']); ?>
                    </div>
                </div>
                <h2 class="adharno">
                    <?php echo $row['adhar_no']; ?>
                </h2>
                <hr style="color: rgb(234, 167, 22); margin: 5px; height: 2px;">
                <footer>
                    <h3 class="mera">मेरा <span class="mera" style="color: red;"> आधार </span><span class="mera">, मेरी
                            पहचान</span></h3>
                </footer>
            </div>


            <!-- back card -->


            <div class="back flip">
                <header>
                    <div class="ask">
                        <img src="img/asok_1.png" alt="">
                    </div>
                    <div class="flg">
                        <img src="img/flag.jpg" alt="">
                        <div class=" titleback">
                            <h3>भारतीय विशिष्ट पहचान प्रधिकरण <br>Unique Identification Authority Of India</h3>
                        </div>
                    </div>
                    <div class="udi">
                        <img src="img/Aadhaar_Logo.png" alt="">
                    </div>
                </header>
                <hr style="color: rgb(234, 167, 22); margin:10px; height: 2px;">
                <div class="data">
                    <div class="address">
                        <div class="hadd">
                            <h2>पता :</h2>
                            <p>
                                <?php echo $row['relation']; ?>
                                <?php echo $row['f/h_hindi_name']; ?> ,
                                <?php echo $row['hindi_address']; ?>,
                                <?php echo $row['h_tahasil']; ?>,
                                <?php echo $row['h_post']; ?>,
                                <?php echo $row['h_district']; ?>,
                                <?php echo $row['h_state']; ?> -
                                <?php echo $row['pin_code']; ?>
                            </p>
                        </div>
                        <div class="eadd">
                            <h2>Address :</h2>
                            <p>
                                <?php echo $row['relation']; ?>
                                <?php echo $row['f/h_eng_name']; ?>,
                                <?php echo $row['eng_address']; ?>,
                                <?php echo $row['e_tahasil']; ?>,
                                <?php echo $row['e_post']; ?>,
                                <?php echo $row['e_district']; ?>,
                                <?php echo $row['e_state']; ?> -
                                <?php echo $row['pin_code']; ?>
                            </p>
                        </div>

                    </div>
                    <div class="qrcode">

                        <?php
                            //include("qrcode/qrlib.php");
                            creatqr1($row['ename']);
                            ?>
                    </div>
                </div>
                <h2 class="adharno">
                    <?php echo $row['adhar_no']; ?>
                </h2>
                <hr style="color: rgb(234, 167, 22); margin: 5px; height: 2px;">
                <footer class="footer">
                    <ul>
                        <li class="udaino"><i class="fa- fa-phone-rotary icon"></i>1947 </li>
                        <li><i class="fa-regular fa-envelope icon"></i>help@uidai.gov.in</li>
                        <li><i class="fa fa-globe icon"></i>www.uidai.gov.in</li>
                    </ul>


                </footer>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <div class="barcode">
        <?php
        
        $adharid="adhar".rand(1000,9999);
        ?>
        <img src="bar_code/bar_code.php?codetype=code128&taxt=<?php echo $adharid;?>&print=true">
    </div>

    <div class="button">

        <a href="update.php?editid=<?php echo $row['adhar_no'] ;?>" class="btn update">Update</a>
        <a href="code.php?logout=adharlogout" type="button" class="logout btn">Logout</a>
    </div>
</body>
<!-- <script>
    function flip() {
        var x = document.getElementsByClassName("container").style;
        x.transform = "rotateY(-180deg)";
    }
</script> -->

</html>
<?php
        }
    }
    ?>