<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="sub">
            @foreach($results as $key => $result)
            @if($key == 'images')
            <img src="{{asset('storage/images/'.$result)}}" style="width:300px; height:300px" alt="">
            @endif
            <div class="p-1">
                <a href="">
                    {{ $key }} = {{ $result }}
                </a>
            </div>
            @endforeach
            @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
</body>
</html>