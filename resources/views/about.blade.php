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
            <a href="{{route('home')}}" id="home">Home</a>
            <a href="{{route('skills')}}" id="skills">Skills</a>
            <a href="{{route('about')}}" id="education">About me</a>
        </div>

        <div class="card">

            <div class="part1">
                <div class="img">
                    <img src="https://data.whicdn.com/images/325527925/original.jpg" alt="" id="me">
                </div>
                <div class="fio">
                    <h2 id="n">N1KKOU</h2>
                    <p>Kamila Nurgaliyeva</p>
                    <p><spann style="color: rgb(220, 47, 30);"> xxx </spann>websites</p>
                </div>
            </div>

            <div class="part2">
                <table class="table table-hover" id="table">
                    <tr>
                        <th>Full Name</th>
                        <td>Kamila Nurgaliyeva</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>Female</td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td>February 6, 2002</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>Kazakhstan</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>Kokshetau</td>
                    </tr>
                    <tr>
                        <th>Education</th>
                        <td>SDU, IS</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>190107067@stu.sdu.edu.kz</td>
                    </tr>
                    <tr>
                        <th>Phone num:</th>
                        <td>8-776-***-**-**</td>
                    </tr>
                </table>
            </div>


        </div>




    </div>
    
</body>
</html>