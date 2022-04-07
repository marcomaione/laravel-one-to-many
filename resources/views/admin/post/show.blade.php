 @extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>visualizza post</h1>
                <div><strong>Titolo</strong>{{$post->title}}</div>
                <div><strong>contenuto</strong>{{!!$post->content !!}}</div>
                <div><strong>slug</strong>{{$post->slug}}</div>
                <a href="{{route('admin.post.index')}}" class="btn btn-primary">torna alla lista</a>


        
            </div>
        </div>
    </div>
@endsection