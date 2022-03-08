<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    
    <title>Admin</title>
</head>
<body class="admin-body"> 
{{session('user')}}
<div>
        <ul>
             <li class="dropdown" >
                  <a href="javascript:void(0)" class="dropbtn">Logout</a>
                  <div class="dropdown-content">
                    <a href="logout">Logout</a>
                  </div>
            </li>
        </ul>
        <!-- <a  href="logout.php"><button class ="tlogout">Log out</button></a> -->
    </div>
    <div class="adbox"> 
        <form action="displayadmin.php" method="post" id="ad"> 
            <label> Enter User Name</label>
            <input type="text" name="name" id="name">
            <p><b>Select Field:</b></p>
            <span class="afield"> <label  class="rad"> <input type="radio" name="field" value="admin"><b>Admin</b></label>
                <label  class="rad"><input type="radio" name="field" value="Teacher" ><b>Teacher</b></label>
                <label  class="rad"><input type="radio" name="field" value="Student" id="course"><b>Student</b></label>
            </span>
             <div>
                <button class="search-btn" type="submit" name="submit" >Search</button>
            </div>
        </form>
      <!-- form for display all admin ,teacher and student -->
        <form action="displayadmin.php" method="post" id="all">
            <p><b>Select Field to display All :</b></p>
            <span class="afield"> <label  class="rad"> <input type="radio" name="field" value="admin"><b>Admin</b></label>
                <label  class="rad"><input type="radio" name="field" value="Teacher" ><b>Teacher</b></label>
                <label  class="rad"><input type="radio" name="field" value="Student" id="course"><b>Student</b></label>
             </span>
            <div>
                <button class="search-btn" type="submit" name="search-all" >Search</button>
            </div>      
         </form>
         <!-- <div class ="logout">
            <a  href="logout.php"><button>Log out</button></a>
        </div> -->
    </div>
<script>
    //validation
$("#ad").validate({
 rules:{
    name:{
      required:true
    },
    field:{
        required:true
    }
 }
});
$("#all").validate({
 rules:{
    field:{
        required:true
    }
}
});
</script>
</body>
</html>