<x-app-layout>

</x-app-layout>
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