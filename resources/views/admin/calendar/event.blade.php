<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width", initial-scale-1.0>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>
<body>


<div class="container">
    <div class="jumbotron">
        <h1>Event calendar</h1>
        <div class="row">
            <a href="{{url('calendar/add')}}" class="btn btn-success">Add events</a>
            <a href="{{url('calendar/edit')}}" class="btn btn-warning">Edit events</a>
            <a href="#" class="btn btn-danger">Delete events</a>
        </div><br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2e642e; color: white">
                        Full calendar
                    </div>
                    <div class="panel-body">
                        {!! $calendar->calendar() !!}
                        {!! $calendar->script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>