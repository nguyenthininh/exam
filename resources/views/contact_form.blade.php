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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <title>Khảo sát sinh viên</title>
</head>
<body>

<div class="container">
    <div class="dien_thong_tin col-lg-6 col-lg-offset-3 div_form">
        <h1 class="text-center anh_td">Khảo sát</h1>
        <form id="contactForm">
<!--        <form  role="form" action="{{url("/update")}}" method="POST">-->

            <div class="form-group">
                <label for="exampleInputName1"><b>Họ và Tên</b></label>
                    <!-- <input type="text" name="ten" class="form-control" id="exampleInputName1" placeholder="Họ và Tên"> -->
                    <input type="text" class="form-control" id="inputName" placeholder="Họ và Tên" data-error="Vui lòng nhập tên" name="name" required>
            </div>

            <div class="form-group ">
                <label for="exampleInputAge"><b>Email</b></label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>


            <div class="form-group ">
                <label for="exampleInputAddress1"><b>Address</b></label>
                <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> -->
                <input type="type" class="form-control" id="inputAdress" placeholder="Address" data-error="Vui lòng nhập address" name="address" required>

            </div>

            <div class="form-group">
                <label for="exampleInputPhone1"><b>Số điện thoại</b></label>
                <!-- <input type="number" name="phone"class="form-control" id="exampleInputPhone1" placeholder="Số điện thoại"> -->
                <input type="number" class="form-control" id="inputPhone" placeholder="Số điện thoại" data-error="Vui lòng nhập số điện thoại" name="number" required>

            </div>

            <div class="modal-footer">
                <button type="submit" id="submit" class="btn btn-info">Save</button>

            </div>

        </form>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var address = $('#address').val();


        $.ajax({
            url: "/exam/public/contact-form",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                number:number,
                address:address,

            },
            success:function(response){
                console.log(response);
            },
        });
    });
</script>

</body>
</html>
