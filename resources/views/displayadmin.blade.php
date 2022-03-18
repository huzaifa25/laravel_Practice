<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"><!--font awesome-->
    <script src="https://kit.fontawesome.com/4ea6e3ab0b.js" crossorigin="anonymous"></script><!--font awesome-->
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
                    <td class="action">
                        <form action="{{ url('deletedata' , $value->id ) }}" method="POST"> 
                            @csrf
                            <a  href="{{route('deletedata',$value->id)}}"><i class="fa-solid fa-trash-can" style="color:whitesmoke;"  value="{{ $value->id }}"> </i> </a>
                        </form>
                        <form action="{{ url('updatedata' , $value->id ) }}" method="POST">                    
                            @csrf
                            <a  href="{{route('updatedata',$value->id)}}"> <i class="fa-solid fa-file-pen" style="color:whitesmoke;" value="{{ $value->id }}"></i> </a>
                        </form>
                     </td> 
                </tr>
                @endforeach
                
            </table>           
    </div>
  

</body>
</html>