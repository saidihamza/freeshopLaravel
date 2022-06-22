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
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data )
                <tr>
                    <td>{{$data->name}}</td>
                    <td> {{$data->email}} </td>
                    @if ($data->usertype=='0')
                    <td><a href="{{url(')}}">Delete</a> </td>
                    @else
                    <td>Not allowed</td>
                    @endif
                    

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</html>
</body>