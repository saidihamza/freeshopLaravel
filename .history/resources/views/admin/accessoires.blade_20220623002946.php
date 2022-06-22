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


    <div class="tabl">
        <form action="{{url('/uploadaccessoirs')}}" method="post" enctype="multipart/form-data">
            
            @csrf
            
            <label for="">Title</label>
            <input type="text" name="title" placeholder="votre " id="" required>
            <br>
            <br>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="votre prix" id="" required>
            <br>
            <br>
          
            <input type="file" name="image" id="" required>
            <br>
            <br>
            <button  class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <br>
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th>Accessoires Name </th>
                    <th> Accessoires Price</th>
                    <th> Accessoires Image</th>
                    <th> Action </th>
                    <th> Action 1</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data1 as $data1 )

                <tr>
                    <td>{{$data1->title}}</td>
                    <td>{{$data1->price}}</td>
                    <td><img src="/accessoiresimage/{{$data1->image}}" alt=""></td>
                    <td><a href="{{url('/deleteAccessoires',$data1->id)}}">Delete</a> </td>
                    <td><a href="{{url('/updateviewAcce',$data1->id)}}">Update</a> </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</html>
</body>