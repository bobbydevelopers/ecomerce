<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice
    </title>
</head>
<body>
<div class="row">
            <div class="col-lg-4">
            <table><tr>
            <th>Sr.No</th>
            <!-- <th>Name</th>
            <th>Email Id</th>
            <th>Phone No.</th>
            <th>Address</th> -->
        </tr>
        @foreach($category as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <!-- <td>{{$emp->name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->phone}}</td>
            <td>{{$emp->address}}</td> -->
       </tr>
    @endforeach
    </table>
    </div>
</body>
</html>