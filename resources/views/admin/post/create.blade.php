@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>crea un nuovo post</h1>

                <form method="POST" action="{{route('adminpost.store')}}">

                    @csrf
                    
                    <div class="form-group">
                      <label for="title">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea class="form-control" id="content" rows="10" name="content" ></textarea>
                       
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


        
            </div>
        </div>
    </div>
@endsection