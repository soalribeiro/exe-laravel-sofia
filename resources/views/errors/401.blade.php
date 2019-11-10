<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NotíciArte</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #ffb92d;
        }

        .row {
            width: 100%;
        }

        #wrapDiv {
            background-color: rgba(255, 255, 255, 0.3);
            margin-top: 100px;
            padding: 100px 0;
        }

        h1 {
            font-size: 10rem;
            color: #3490dc; /*e42e80;*/
            font-weight: bold;
        }

        h2 {
            text-transform: uppercase;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn {
            background-color: #fff;
            color: #3490dc; /*#e42e80;*/
            text-transform: uppercase;
            font-weight: 500;
            padding: 5px 30px;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.75);
            color: #3490dc;
        }
    </style>

</head>

<body>

    <div class="row col-md-8 mx-auto justify-content-center align-items-center" id="wrapDiv">
        <div class="col-md-4">
            <h1>401</h1>
        </div>

        <div class="col-md-5">
            <h2>Não tens permissões para ver esta página.</h2>

            <div class="row col-md-11">
                <p>Mas não te preocupes, há sempre um caminho para casa.</p>
            </div>
            <a href="{{ route('index') }}">
                <button type="button" class="btn">Home</button>
            </a>
        </div>
    </div>

</body>

</html>