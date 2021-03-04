<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    <title>Add Student</title>
</head>
<body>
<section style="padding-top:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Student <a href="/student" class="btn btn-primary">View All</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('student_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_updated')}}
                            </div>
                        @endif
                        <form method="POST" enctype="multipart/form-data" action="">
                            @csrf
                            <input type="hidden" name="id" value="{{$students->id}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$students->name}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name">Father Name</label>
                                <input type="text" name="name" value="{{$students->father_name}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name">Contact Number</label>
                                <input type="text" name="name" value="{{$students->contact_number}}" class="form-control">
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
