<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="http://pngimg.com/uploads/paper_plane/paper_plane_PNG53.png">

    <link rel="stylesheet" href="{{ asset('css/n1kkou.css') }}">

    <title>N1KKOU's cv</title>
</head>
<body>
    <div class="full">
        <div class="menu">
            <a href="{{route('home')}}" id="home">{{__('lang.home')}}</a>
            <a href="{{route('skills')}}" id="skills">{{__('lang.skills')}}</a>
            <a href="{{route('about')}}" id="education">{{__('lang.about')}}</a>
        </div>

        <div class="center">
            <div class="photo">
                <img src="https://p.favim.com/orig/2019/01/14/rainbow-girl-aesthetic-Favim.com-6806473.jpg" alt="" id="photo">
            </div>
            <div class="description">
                <div class="text">
                    <h1>{{__('lang.hi')}}<br> {{__('lang.intro1')}} <spann style="color: rgb(255, 255, 255); background-color: rgb(39, 51, 53);"> {{__('lang.intro2')}} </spann><br>{{__('lang.web')}}</h1>
                </div>
                <div class="btn">
                    <button type="button" class="btn btn-outline-dark" > {{__('lang.contact')}} </button>
                </div>
            </div>
        </div>


    </div>



    </div>
</body>
</html>