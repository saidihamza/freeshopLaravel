<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>

    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->

    @include('admin.adminscript')
    <!-- End custom js for this page -->
    
    <div class="tabl">
        <form action="{{url('updateAccessoires')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Title</label>
            <input type="text" name="title" placeholder="votre nom" id="" value="{{$data->title}}" required>
            <br>
            <br>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="votre prix" value="{{$data->price}}" id="" required>
            <br>
            <br>
            <label for="">Image</label>
            <input type="file" name="image" id="" required>
            <br>
            <br>
            <label for="">Old Image</label>
            <img src="/accessoiresimage/{{$data->image}}" alt="">
            <br>
            <br>
            <button primary type="submit">Save</button>
        </form>
    </div>


</html>
</body>