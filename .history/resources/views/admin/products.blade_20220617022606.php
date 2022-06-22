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
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Title</label>
    <input type="text" name="" id="">
    <br>
    <label for="">Price</label>
    <input type="text" name="" id="">
    <label for="">Image</label>
    <input type="file" name="" id="">
    <button type="submit">Save</button>
</form>
    </div>

</html>
</body>