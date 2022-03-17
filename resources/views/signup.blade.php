
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <title>signup</title>
</head>
<body class="bsign">
    <div class="regcontainer">
        <p class="rig">Register Your Self</p>
        <form class="" id="signupform" action="{{route('user.form')}}" method="post">
           @csrf
            <label for="mail"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="mail" id="mail" class="@error('email') is-invalid @else is-valid @enderror">
            <br><br>
            <label for="uname"><b>User Name</b></label>
            <input type="text" placeholder="Enter UserName" name="uname" id="uname">
            <br><br>
            <label for="psword"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw">
            <br><br>        
            <label for="confirmpsw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirmpsw">
            <br><br>
         <!-- text editor -->
 
         
         <select id="designation" name="designation" class="select-style">
                  <option selected>Choose your designation</option>
                  @foreach($desig as $post)
                  <option name="ids[]"  value="{{ $post->id }}">{{ $post->designation }}</option>
                  @endforeach
                </select>
       
        <br><br>
             <div id="student" class="group">
                 @foreach($data  as $user)
                 <input type="checkbox" name="course_ids[]" value="{{ $user->course_id }}" > 
                    {{ $user->course_id }} {{ $user->course_name }}  
                    <br>
                    
                  @endforeach
                  <label for="atleast">Please Select atleast one course</label>
              </div> 
        
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
<script>
  //form validation
// $("#signupform").validate({
//  rules:{
//     mail:{
//       required:true,
//       email:true
//     },
//     uname:{
//       required:true,
//       minlength: 2
    
//     },
//     psw:{
//       required:true,
//       minlength: 5
//     },
//     confirmpsw:{
//       required: true,
//       minlength: 5,
//       equalTo:"#psw"
//     },
//     field:{
//       required:true
//     },
//     topic:{
//       required:"#course:checked",
//       minlength:1
//     }
//   },
//   messages:{
//     topic:"Please select atleast one course"
//   }
  
// });

// $(document).ready(function(){
//   $("#emp").hide();
// })

$(document).ready(function(){
  $("input[name='field']").on('change',function(){
    var initial = $("input[name='field']:checked").val();
    console.log($("input[name='field']:checked").val());
    if(initial == 'student'){
      $("#select-course").css('display','block');
    }else{
      $("#select-course").css('display','none');
    }
  })
})

$(document).ready(function () {
    $('.group').hide();
    //$('#student').show();
    $('#designation').change(function () {
        if($('#designation').val() == '3') {
          $('#student') .show();
        } else {
          $('#student').hide();
        }
    })
});
</script>
</body>
</html>
