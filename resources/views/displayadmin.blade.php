<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <title>Student Record</title>
</head>
<body>
    <div>
        <ul>
             <li class="dropdown" >
                  <a href="javascript:void(0)" class="dropbtn">Logout</a>
                  <div class="dropdown-content">
                  <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button type="submit">Log out</button>
                      </form>
                    <!-- <a href="logout.php">Logout</a> -->
                  </div>
            </li>
        </ul>
        <!-- <a  href="logout.php"><button class ="tlogout">Log out</button></a> -->
    </div>
    <div class="teabox">
            <table class="t-table">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
                @foreach($ad ?? '' as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->user_name }}</td>
                    <td>{{ $value->designation }}</td>
                    <td>
                        <form action="{{ url('deletedata' , $value->id ) }}" method="POST"> 
                            @csrf
                            <a class="action" href="{{route('deletedata',$value->id)}}"><button class="action" value="{{ $value->id }}">   Delete</button></a>
                        </form>
                        <form action="{{ url('updatedata' , $value->id ) }}" method="POST">                    
                            @csrf
                            <a class="action" href="{{route('updatedata',$value->id)}}"><button class="action" value="{{ $value->id }}">   Update</button></a>
                        </form>
                     </td> 
                </tr>
                @endforeach
                
            </table>           
    </div>
  

</body>
</html>