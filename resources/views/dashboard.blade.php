<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="py-12">
      
                <div class="row text-center">
                        <div class="col-lg-3">
                       
                        </div>
                        <div  style="padding: 40px" class="col-lg-8 card">
                        <h2 class="text-center text-success"> Add Post</h2>
                        <form action="{{route('add-post')}}" method="POST">
                            @csrf
                        <div class="mb-3 form-group">
                           
                            <input type="text" name="title" placeholder="Post Title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           
                        </div>
                        <div class="mb-3 form-group">
                         
                            <input type="text" name="content" placeholder="Post Content" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                        </div>
                        <div class="col-lg-6">

                        </div>
            </div>
       
</x-app-layout>
