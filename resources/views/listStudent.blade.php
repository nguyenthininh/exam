<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script !src="https://kit.fontawesome.com/a076d05399.js?fbclid=IwAR0JdE3rdMmZhGRsXRnUAHg_WkrC1e9tI6EwRWf96lJt8416f6KyJ5VODJg"></script>

    <title>list students</title>
</head>
<body>
<div class="title">
    <div class="container">
        <h1>List Student</h1>

        <div class="float-right pb-3">
            <!-- Button trigger modal add student -->
            <a href="{{url("/create")}}" class="btn btn-primary">
                Add Student
            </a>
        </div>

        {{--            <table class="table border-bottom border-left border-right" id="student_listing">--}}
        <table class="table table-bordered" id="student_listing">
            <thead class="thead-light">
            <th scope="col" class="text-center" style="width: 5%">ID</th>
            <th scope="col" style="width: 25%">Name</th>
            <th scope="col" style="width: 25%">Age</th>
            <th scope="col" style="width: 15%">Address</th>
            <th scope="col" style="width: 15%">Telephone</th>
            <th scope="col" style="width: 15%">Action</th>



            </thead>
            <tbody>
            <?php foreach ($student as $s):?>
            <tr>
                <td class="text-center">#<?php echo $s['id'];?></td>
                <td> {{$s->name}}</td>
                <td>{{$s->age}}</td>
                <td>{{$s->address}}</td>
                <td>{{$s->telephone}}</td>
                <td class="d-flex justify-content-around">
{{--                    <a href="{{url("/create")}}" data-target="#edit-student" data-toggle="modal">Add</a>--}}
{{--                    <a href="#" data-target="#delete-student" data-toggle="modal">Delete</a>--}}
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
