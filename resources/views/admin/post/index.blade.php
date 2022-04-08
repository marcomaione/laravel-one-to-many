@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="{{route('admin.post.create')}}" class="btn btn-primary">crea un post</a>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Contenuto</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->slug}}</td>
                                
                                <td class="d-flex">
                                    <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-primary">vedi</a>
                                    <a href="{{route('admin.post.edit', $post->id)}}" class="btn btn-secondary">modifica</a>

                                    <form method="POST" action="{{route('admin.post.destroy', $post->id)}}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

        
            </div>
        </div>
    </div>
@endsection