<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/styles.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background: linear-gradient(to right, dimgrey , white);
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<img src="{{ asset('img/logo_colly-01.jpg') }}" alt="no" style="width: 250px; height: 250px;">

<div class="nav">
    <ul>
        <li> <a href="{{asset ('books')}}"> Joel</a></li>
    </ul>
</div>

@foreach($projects as $project)


        <form action="{{ route('project.update', $project->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" >Edit Information</label>
                <div class="col-sm-10">
                    <textarea name="name" id="project" class="form-control" value="{{$project->name}}"> </textarea>
                    <textarea name="email" id="project" class="form-control" value="{{$project->email}}"> </textarea>
                    <textarea name="message" id="project" class="form-control" value="{{$project->message}}"> </textarea>
                </div>
            </div>

            <div>
                <div>
                    <input type="submit" value="Update Information" />
                </div>
            </div>
        </form>


        @endforeach


</body>
</html>