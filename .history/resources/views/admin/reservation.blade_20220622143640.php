<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>

    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->

    @include('admin.adminscript')
    <!-- End custom js for this page -->
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Product Image</th>
                    <th> Action </th>
                    <th> Action 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data )

                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td><img src="/productimage/{{$data->image}}" alt=""></td>
                    <td><a href="{{url('/deleteproduct',$data->id)}}">Delete</a> </td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a> </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</html>
</body>