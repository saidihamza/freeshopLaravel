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
<form action="" method="post" enctype="multipart/form-data">
 
    <label for="">Title</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">Price</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">Image</label>
    <input type="file" name="" id="">
    <br>
    <br>
    <button type="submit">Save</button>
</form>
    </div>

</html>
</body>