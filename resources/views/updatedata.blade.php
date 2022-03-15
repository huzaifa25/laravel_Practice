<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
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
    <div class="upbox">
    <h1>Update Member</h1>
    <form action="{{ url('edit' , $data->id ) }}" method="POST">
        @csrf
        <input type="hidden" value={{$data['id']}}>
        <input type="text" name="user_name" value="{{$data['user_name']}}" > <br> <br>
        <input type="text" name="email" value="{{$data['email']}}" > <br> <br>
        <Button type="submit">Update</Button>
    </form>   
    </div>
  

</body>
</html>