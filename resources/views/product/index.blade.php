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
                        <h4>Products Detail
                            <a href="{{url('product/create')}}" style="float:right;">Add Product</a>

                        </h4>
                    </div><hr><br>
                    <div>
                        <center>
                        <table >
                            <tr >
                                <th>Id</th>  
                                <th>Category</th>                             
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>

                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->qty}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="{{url('product/'.$product->id.'/edit')}}">Edit</a>
                                </td>

                                <td>
                                    <a href="{{url('product/'.$product->id.'/delete')}}">Delete</a>
                                </td>
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