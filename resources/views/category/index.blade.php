<style>
    table,tr,th,td{
        border:1px solid black;
        padding:5px 30px 5px 30px;

    }
</style>

<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               
                <div class="p-6 text-gray-900">
                @if(session('message'))
                    <div>{{session('message')}}</div>

                @endif
                    <div>
                        <h4>Category Detail
                            <a href="{{url('category/create')}}" style="float:right;">Add Category</a>

                        </h4>
                    </div><hr><br>
                    <div>
                        <center>
                        <table >
                            <tr >
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>

                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>Action</td>
                            </tr>
                            @endforeach
                        </table>
                        </center>
                    </div>      

                
                    
                </div>

            </div>
        </div>
    </div>
</x-app-layout>