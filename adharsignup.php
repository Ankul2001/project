<?php

include("connect.php");


?>



<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>

</head>
<style>
    .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: fit-content;
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
input[type="date"]{
  width: 90%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
input[type="radio"]{
    width: 20px;
    height: 20px;
    margin: 10px 20px;
}
button[type="submit"],button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
#front1{
  display: grid;
  grid-template-columns: 1fr 1fr;
}
#front2{
  display: none;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 20px;
}
.btn{
  display: flex;
  gap: 10px;
}

</style>
<body>
  <div class="container">
    <form id="signup-form" method="POST" action="code.php" enctype="multipart/form-data">
      <h2>Adhar Sign Up</h2>
      <hr><br><br>
      <div class="data1" id="front1">
      <div class="form-group">
        <label for="hindiname">नाम :</label>
        <input type="text" id="hindiname" name="hindiname" required>
      </div>
      <div class="form-group">
        <label for="engname">Name:</label>
        <input type="text" id="engname" name="engname" required>
      </div>
      <div class="form-group">
        <label for="adharno">Adhar No.:</label>
        <input type="text" id="adharno" name="adharno" onkeyup="space()" required>
      </div>
      <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" id="adharphoto" name="adharphoto" required>
      </div>
      <div class="form-group">
        <label for="adhardob">D.O.B. :</label>
        <input type="date" id="adhardob" name="adhardob" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value="पुरुष/Male" required>पुरुष/Male <br>
        <input type="radio" id="gender" name="gender" value="स्री/Female" required>स्री/Female<br>
        <input type="radio" id="gender" name="gender" value="मध्यम/Transgender" required>मध्यम/Transgender
      </div>
      <button onclick="hide()">Next</button>
      </div>

<!-- data2 -->

      <div class="data2" id="front2">
        <div class="form-group">
          <label for="hfathername">पिता/पति का नाम :</label>
          <input type="text" id="hfathername" name="hfathername" required>
      </div>
      <div class="form-group">
          <label for="efathername">Father/Husband's Name :</label>
          <input type="text" id="efathername" name="efathername" required>
      </div>
      <div class="form-group" id="hrelation">
          <label for="relation">रिस्ते का प्रकार:</label>
          <input type="radio" id="relation" name="relation"  value="C/O" required>C/O <br>
          <input type="radio" id="relation" name="relation"  value="W/O" required>W/O<br>
      </div>
      <div class="form-group">
          <label for="haddress">पता:</label>
          <input type="text" id="haddress" name="haddress" required>
      </div>
      <div class="form-group">
          <label for="eaddress">Address:</label>
          <input type="text" id="eaddress" name="eaddress" required>
      </div>
      <div class="form-group">
          <label for="htahsil">तहसील:</label>
          <input type="text" id="htahsil" name="htahsil" required>
      </div>
      <div class="form-group">
          <label for="etahsil">Tahsil:</label>
          <input type="text" id="etahsil" name="etahsil" required>
      </div>
      <div class="form-group">
          <label for="hpost">पोस्ट:</label>
          <input type="text" id="hpost" name="hpost" required>
      </div>
      <div class="form-group">
          <label for="epost">Post:</label>
          <input type="text" id="epost" name="epost" required>
      </div>
      <div class="form-group">
          <label for="hdist">जिला:</label>
          <input type="text" id="hdist" name="hdist" required>
      </div>
      <div class="form-group">
          <label for="edist">District:</label>
          <input type="text" id="edist" name="edist" required>
      </div>
      <div class="form-group">
          <label for="hstate">प्रदेश:</label>
          <input type="text" id="hstate" name="hstate" required>
      </div>
      <div class="form-group">
          <label for="hetate">State:</label>
          <input type="text" id="estate" name="estate" required>
      </div>
      <div class="form-group">
          <label for="pin">पिन कोड:</label>
          <input type="text" id="pin" name="pin" required>
      </div>
      <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" id="phone" name="phone" required>
      </div>
      <button onclick="pre()">Previous</button>

      <button type="submit"   name="signupbtn" >Sign Up</button>
      </div>
    </form>
  </div>
</body>
<script>

  function hide(){
    var data1=document.getElementById("front1").style;
    var data2=document.getElementById("front2").style;
    data1.display="none";
    data2.display="grid";

  }
  function pre(){
    var data1=document.getElementById("front1").style;
    var data2=document.getElementById("front2").style;
    data2.display="none";
    data1.display="grid";

  }
</script>
</html>
