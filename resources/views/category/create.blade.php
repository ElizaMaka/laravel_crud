

<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h4>Add Category
                            <a href="{{url('category')}}" style="float:right;">Back</a>

                        </h4>
                    </div>
<hr>
</br>
                    <center>
                    <div>
                    <form method="post" action="{{route('category.store')}}" class="form">
                        @csrf
                        @method('post')
                    
                        <div>          
                            <input type="text" name="name" placeholder="Name"  >
                        </div>

                        <div>            
                            <input type="submit" value="Add" >
                        </div>

                    </form>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>