<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width", initial-scale-1.0>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="jombotron">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="backgroumd:#2e6da4; color: white;">
                        Add event
                    </div>
                    <div class="panel-body">
                        <h1>Task : Add data</h1>

                        <form method="post" action="{{url('calendar/store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Event name</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter event name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Color</label>
                                <input type="color" class="form-control" name="color">
                            </div>
                            <div class="form-group">
                                <label>Start date</label>
                                <input type="datetime-local" class="form-control" name="start_date" id="">
                            </div>
                            <div class="form-group">
                                <label>End date</label>
                                <input type="datetime-local" class="form-control" name="end_date" id="">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>