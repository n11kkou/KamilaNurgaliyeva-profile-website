<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="http://pngimg.com/uploads/paper_plane/paper_plane_PNG53.png">

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>ABOUT ME</title>
</head>
<body>
    <div class="full">

       <div class="menu">
            <a href="{{route('home')}}" id="home"> {{ __('lang.home')}}</a>
            <a href="{{route('skills')}}" id="skills">{{ __('lang.skills')}}</a>
            <a href="{{route('about')}}" id="education">{{ __('lang.about')}}</a>
        </div>

        <div class="card">

            <div class="part1">
                <div class="img">
                    <img src="https://data.whicdn.com/images/325527925/original.jpg" alt="" id="me">
                </div>
                <div class="fio">
                    <h2 id="n">N1KKOU</h2>
                    <p>{{ __('lang.name1')}}</p>
                    <p><spann style="color: rgb(220, 47, 30);"> xxx </spann>{{ __('lang.count')}}</p>
                </div>
            </div>

            <div class="part2">
                <table class="table table-hover" id="table">
                    <tr>
                        <th>{{ __('lang.name')}}</th>
                        <td>{{ __('lang.name1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.gender')}}</th>
                        <td>{{ __('lang.gender1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.birth')}}</th>
                        <td>{{ __('lang.birth1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.country')}}</th>
                        <td>{{ __('lang.country1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.city')}}</th>
                        <td>{{ __('lang.city1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.edu')}}</th>
                        <td>{{ __('lang.edu1')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.address')}}</th>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>190107067@stu.sdu.edu.kz</td>
                    </tr>
                    <tr>
                        <th>{{ __('lang.phone')}}:</th>
                        <td>8-776-***-**-**</td>
                    </tr>
                </table>
            </div>


        </div>




    </div>
    
</body>
</html>