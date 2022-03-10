<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    
    <title>Document</title>
  

</head>
<body class="body">
    <h2 class="h2">Welcome to School Mangement System</h2>
<!-- 
    <div class="box" onclick="document.getElementById('admin').style.display='block'">
        <p>Login</p>
    </div> -->
    <centre><div class="box" onclick="document.getElementById('teacher').style.display='block'">
        <p>Login</p></centre>
    </div>
    <!-- <div class="box"onclick="document.getElementById('student').style.display='block'">
        <p>Student</p>
    </div> -->
    <!--Modal-Admin-->
    <div id='admin' class="modal">
  
        <form id="loginform" class="modal-content animate" action="{{route('login')}}" method="post">
          @csrf
          <div class="imgcontainer">
            <span onclick="document.getElementById('admin').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/a.jpg" alt="Avatar" class="avatar">
          </div>
          <div class="container"  >
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="required, at least 2 characters" name="admin_email">
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Password require, at least 5 character" name="admin_psw">
            <br><br>
           
            <button type="submit" name="form1">Login</button>
            <a href="signup.php"><button type="button" >Sign up</button></a>
            <span class="fpsw"> <a href="forget-password.php">Forgot Password</a><span>
          </div>
        </form>
      </div>
      <!--Modal-End-->
        <!--Modal-Teacher-->
    <div id='teacher' class="modal">
  
        <form id="loginform2" class="modal-content animate" action="{{route('login')}}" method="post">
        @csrf  
        <div class="imgcontainer">
            <span onclick="document.getElementById('teacher').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/t.png" alt="Avatar" class="avatar">
          </div>
          <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="admin_email" >
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="admin_psw" >
            <br><br>
            <select id="designation" name="designation" class="select-style">
                  <option selected>Choose your designation</option>
                  <option value="admin">Admin</option>
                  <option value="teacher">Teacher</option>
                  <option value="student"  >Student</option>
                </select>  
            <button type="submit" name="form2" name="submit">Login</button>
            <a href="signup.php"><button type="button" >Sign up</button></a>
           <span class="fpsw"> <a href="forget-password.php">Forgot Password</a><span>
          </div>
        </form>
      </div>
      <!--Modal-End-->
        <!--Modal-Student-->
    <div id='student' class="modal">
  
        <form id="loginform3" class="modal-content animate" action="" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('student').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/s.jpg" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text"  placeholder="Enter Username" name="std_name" >
            <br><br>
            <label for="spsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="spsw" >
              
            <button type="submit" name="submit" >Login</button>
            <a href="signup.php"><button type="button">Sign up</button></a>
            <span class="fpsw"> <a href="forget-password.php">Forgot Password</a><span>
          </div>
        </form>
      </div>
      <!--Modal-End-->
<script>
 // Get the modal 
var modalAdmin = document.getElementById('admin');
var modalTeacher = document.getElementById('teacher');
var modalStudent = document.getElementById('student');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalAdmin) {
        modalAdmin.style.display = "none";
    }else if(event.target == modalTeacher){
        modalTeacher.style.display ="none";
    }else if(event.target == modalStudent){
        modalStudent.style.display ="none";
    }
}

$("#loginform").validate({
  rules:{
    admin_email: {
      required: true,
      minlength:2     
    },
    admin_psw:{
      required: true,
    }
  }

});
$("#loginform2").validate({
  rules:{
    teacher_name: {
      required: true,
      minlength:2     
    },
    tpsw:{
      required: true,
    }
  }

});
$("#loginform3").validate({
  rules:{
    std_name: {
      required: true,
      minlength:2     
    },
    spsw:{
      required: true,
    }
  }

});
</script>

</body>
</html>