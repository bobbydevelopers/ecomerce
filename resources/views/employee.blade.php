<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Employee</title>
</head>
<body>
    <hr>
    <h3 style="text-align:center";>Welcome To Employee</h3>
    <hr>


        <div class="row">
            <div class="col-lg-4">
            <table><tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Phone No.</th>
            <th>Address</th>
        </tr>
        @foreach($employee as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <td>{{$emp->name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->phone}}</td>
            <td>{{$emp->address}}</td>
       </tr>
    @endforeach
    </table>
    </div>


            <div class="col-lg-4">
        <form action="addemp" method="post">
            @csrf
            <input type="text" name="name" placeholder="enter name"><br>
            <input type="email" name="email" placeholder="enter email"><br>
            <input type="number" name="phone" placeholder="enter phone"><br>
            <input type="text" name="address" placeholder="enter address"><br>
            <input type="submit" value="submit">
        </form>
              </div>

           </div>


        </div>









</body>
</html>