<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Student</title>
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
                  </div>
            </li>
        </ul>
        <!-- <a  href="logout.php"><button class ="tlogout">Log out</button></a> -->
    </div>
    <form>    
    <h1>Student Detail</h1>
        <div class="stubox">
            <table class="s-table">
                <tr>
                    <th>Student ID</th>
                    <th>Email</th>
                    <th>Student Name</th>
                </tr>
                @foreach($data ?? '' as $user)
                <tr>
                  <td>{{$user ->id}}</td>
                  <td>{{$user ->email}}</td>
                  <td>{{$user ->user_name}}</td>
                </tr>
                @endforeach
            </table>
          
        </div>
        <br><br>
        <h1>Course Detail</h1>
        <div class="crsbox">
            <table class="s-table">
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                </tr>
              
                @foreach($crs ?? '' as $values)
                <tr>
                  <td>{{$values ->course_id}}</td>
                  <td>{{$values ->course_name}}</td>
                </tr>
                @endforeach
            </table>
          
        </div>
    </form>
    <!-- <div class ="logout">
                 <a  href="logout.php"><button>Log out</button></a>
            </div> -->
</body>
</html>