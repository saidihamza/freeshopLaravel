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
        <form action="{{url('/uploadproducts')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Title</label>
            <input type="text" name="title" placeholder="votre nom" id="" required>
            <br>
            <br>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="votre prix" id="" required>
            <br>
            <br>
            <label for="">Image</label>
            <input type="file" name="image" id="" required>
            <br>
            <br>
            <button type="submit">Save</button>
        </form>
    </div>
    <br>
    <div class="table">
        <table class="table">
            <thead>
                <tr>

                    <th>Product Name </th>
                    <th> Product Price</th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data )

                <tr>
                    <td></td>
                    <td> </td>

                    <td><a href="{}">Delete</a> </td>



                    @endforeach


                </tr>

            </tbody>
        </table>
    </div>

</html>
</body>