<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <script  src="/app.js"></script>
    <title>Blog</title>
</head>
<body>
    <article>
         <h1><a href="/article/my-first-post">First Article</a></h1>
         <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
    </article>

    <article>
        <h1><a href="/article/my-second-post">Seocnd Article</a></h1>
        <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
     </article>

    <article>
         <h1><a href="/article/my-third-post">Third Article</a></h1>
         <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
     </article>
    <select name='designation'>
        <option value="admin" selected="">Admin</opiton>
        <option value="teacher" selected="">teacher</opiton>
        <option value="student" selected="">student</opiton>
        <select name='designation'>
        @foreach ($designation ?? '' as $values)
            <option value="{{$values->designation}}" selected="">{{$values->designation}}</option>
        @endforeach
 
</body>
</html>