<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="/updatetasks" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                <input type="submit" class="btn btn-warning" value="Update"/>
                &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
            </form>
        </div>
    </body>
</html>
