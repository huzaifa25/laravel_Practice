<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <title>Teacher</title>
</head>
<body class="tea-body">
    <div>
        <ul>
             <li class="dropdown" >
                  <a href="javascript:void(0)" class="dropbtn">Logout</a>
                  <div class="dropdown-content">
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button type="submit">Log out</button>
                      </form>
                    <!-- <a href="logout">Logout</a> -->
                  </div>
            </li>
        </ul>
        <!-- <a  href="logout.php"><button class ="tlogout">Log out</button></a> -->
    </div>
    <h1>Student & Attendence</h1>
   
    <form method="post" id="form_atd">
    <h2>Kindly Select Date </h2>
    <input type="date" name="dates" id="dates">
        <div class="teabox">
            <table class="t-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Attendance</th>
                </tr>
                
                @foreach($std ?? '' as $value)
                <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->user_name }}</td>
                <td>
                    <input type="hidden" name="ids[]" value="{{ $value->id }}" />
                    <select name="ids[]" id="{{ $value->id }}">
                    <option value="" name="ok">Select Attendance</option>
                    <option value="1">Present</option>
                    <option value="0">Absent</option>
                    </select>
                </td>
                </tr>
                @endforeach
                
            </table>
           
        </div>
        <div>
            <button class="atd-btn" type="submit" name="submit" >Save Attendance</button>
        </div>
    </form>
    <div>
        <a  href="ent-marks.php"><button class ="adm-btn">Add Marks</button></a>
    </div>
    
    <script>
  //form validation trying
  
$("#form_atd").validate({
 rules:{
  ok:{
    required:true
    }
  }

  
});
</script>
</body>

</html>
