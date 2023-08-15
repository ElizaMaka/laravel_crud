<style>
    select{
        width:198px;
    }

    .box{
        padding:5px;
    }
</style>

<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h4>Add Products
                            <a href="{{url('product')}}" style="float:right;">Back</a>

                        </h4>
                    </div>
<hr>
</br>
                    <center>
                    <div>
                    <form method="post" action="{{url('product/'.$product->id)}}" class="form">
                        @csrf
                        @method('put')
                        <div class="box">
                            <select name="category_id" >
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{$product->category_id == $category->id? 'selected':''}}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="box">          
                            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" >
                        </div>

                        <div class="box">          
                            <input type="text" name="qty" placeholder="Qty"  value="{{ $product->qty }}">
                        </div>

                        <div class="box">          
                            <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" >
                        </div>

                        <div class="box">            
                            <input type="submit" value="Update" >
                        </div>

                    </form>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>