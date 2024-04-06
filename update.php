<?php

include("connect.php");

if (isset($_REQUEST['editid'])) {
  $editid = $_REQUEST['editid'];
  $result = $object->edit($editid);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);


?>



    <!DOCTYPE html>
    <html>

    <head>
      <title>Update</title>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    </head>
    <style>
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: fit-content;
        margin-top: 100px;
      }

      #signup-form {
        /* width: 800px; */
        padding: 20px;

        border: 1px solid #ccc;
        border-radius: 5px;
      }

      h2 {
        text-align: center;
      }

      .form-group {
        margin-bottom: 15px;
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"],
      input[type="file"],
      input[type="date"] {
        width: 90%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      input[type="radio"] {
        width: 20px;
        height: 20px;
        margin: 10px 20px;
      }

      button[type="submit"],
      button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      #front1 {
        display: grid;
        grid-template-columns: 1fr 1fr;
      }

      #front2 {
        display: none;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
      }

      .btn {
        display: flex;
        gap: 10px;
      }
    </style>

    <body>
      <div class="container">
        <form id="signup-form" method="POST" action="code.php" enctype="multipart/form-data">
          <h2>Adhar Update</h2>
          <hr>
          <br><br><br>
          <div class="data1" id="front1">
            <div class="form-group">
              <label for="hindiname">नाम :</label>
              <input type="text" id="hindiname" name="hindiname" value="<?php echo $row['hname']; ?>" required>
            </div>
            <div class="form-group">
              <label for="engname">Name:</label>
              <input type="text" id="engname" name="engname" value="<?php echo $row['ename']; ?>" required>
            </div>
            <div class="form-group">
              <label for="adharno">Adhar No.:</label>
              <input type="text" id="adharno" name="adharno" value="<?php echo $row['adhar_no']; ?>" required>
            </div>
            <div class="form-group">
              <label for="photo">Password:</label>
              <input type="file" id="adharphoto" name="adharphoto" value="<?php echo $row['photo']; ?>" required>
            </div>
            <div class="form-group">
              <label for="adhardob">Password:</label>
              <input type="date" id="adhardob" name="adhardob" value="<?php echo $row['dob']; ?>" required>
            </div>
            <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="radio" id="gender" name="gender" value="पुरुष/Male" required>पुरुष/Male <br>
              <input type="radio" id="gender" name="gender" value="स्री/Female" required>स्री/Female<br>
              <input type="radio" id="gender" name="gender" value="मध्यम/Transgender" required>मध्यम/Transgender
            </div>
            <button id="btn1">Next</button>
          </div>

          <!-- data2 -->

          <div class="data2" id="front2">
            <div class="form-group">
              <label for="hfathername">पिता/पति का नाम :</label>
              <input type="text" id="hfathername" name="hfathername" value="<?php echo $row['f/h_hindi_name']; ?>" required>
            </div>
            <div class="form-group">
              <label for="efathername">Father/Husband's Name :</label>
              <input type="text" id="efathername" name="efathername" value="<?php echo $row['f/h_eng_name']; ?>" required>
            </div>
            <div class="form-group" id="hrelation">
              <label for="relation">रिस्ते का प्रकार:</label>
              <input type="radio" id="relation" name="relation" onclick="edis()" value="C/O" required>C/O <br>
              <input type="radio" id="relation" name="relation" onclick="edis()" value="W/O" required>W/O<br>
            </div>
            <div class="form-group">
              <label for="haddress">पता:</label>
              <input type="text" id="haddress" name="haddress" value="<?php echo $row['hindi_address']; ?>" required>
            </div>
            <div class="form-group">
              <label for="eaddress">Address:</label>
              <input type="text" id="eaddress" name="eaddress" value="<?php echo $row['eng_address']; ?>" required>
            </div>
            <div class="form-group">
              <label for="htahsil">तहसील:</label>
              <input type="text" id="htahsil" name="htahsil" value="<?php echo $row['h_tahasil']; ?>" required>
            </div>
            <div class="form-group">
              <label for="etahsil">Tahsil:</label>
              <input type="text" id="etahsil" name="etahsil" value="<?php echo $row['e_tahasil']; ?>" required>
            </div>
            <div class="form-group">
              <label for="hpost">पोस्ट:</label>
              <input type="text" id="hpost" name="hpost" value="<?php echo $row['h_post']; ?>" required>
            </div>
            <div class="form-group">
              <label for="epost">Post:</label>
              <input type="text" id="epost" name="epost" value="<?php echo $row['e_post']; ?>" required>
            </div>
            <div class="form-group">
              <label for="hdist">जिला:</label>
              <input type="text" id="hdist" name="hdist" value="<?php echo $row['h_district']; ?>" required>
            </div>
            <div class="form-group">
              <label for="edist">District:</label>
              <input type="text" id="edist" name="edist" value="<?php echo $row['e_district']; ?>" required>
            </div>
            <div class="form-group">
              <label for="hstate">प्रदेश:</label>
              <input type="text" id="hstate" name="hstate" value="<?php echo $row['h_state']; ?>" required>
            </div>
            <div class="form-group">
              <label for="hetate">State:</label>
              <input type="text" id="estate" name="estate" value="<?php echo $row['e_state']; ?>" required>
            </div>
            <div class="form-group">
              <label for="pin">पिन कोड:</label>
              <input type="text" id="pin" name="pin" value="<?php echo $row['pin_code']; ?>" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>
            </div>
            <button id="btn2">Previous</button>

            <button type="submit" name="updatebtn">Update</button>
          </div>
        </form>
      </div>
    </body>
    <script>
      $(document).ready(function() {
        $("#btn1").click(function() {
          $("#front2").css("display", "grid");
          $("#front1").css("display", "none");
        });

        $("#btn2").click(function() {
          $("#front1").css("display", "grid");
          $("#front2").css("display", "none");
        });
      });
    </script>

    </html>
<?php }}?>

