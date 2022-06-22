<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

            <div class="table">
                <table class="table">
                    <thead>
                        <tr>
                       
                            <th> Name </th>
                            <th> Email </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data )
                            
                        @endforeach
                        <tr>
                            <td>{{$data->name}}</td>
                            <td> {{$data->email}} </td>
                            <td><a href="">Delete</a> </td>
  
                        </tr>

                    </tbody>
                </table>
            </div>