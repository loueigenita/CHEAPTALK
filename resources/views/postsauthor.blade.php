@extends('base')
@section('content')
  <div class="container">
    <h1 class="header bg-dark text-center text-light">{{$user->name}}</h1>
    <hr>
    @foreach($posts as $post)
  @if ($post->user->gender == 'Male')
  <div class="card m-1 mb-3 pb-3 pt-3 " style="background-color: rgb(66, 116, 255)">
    @else
    <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: rgb(255, 155, 170)">
  @endif
    <div class="card-body">
      <div class="dropdown float-end">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-list"></i> {{$post->category->category}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach(App\Models\User::whereHas('posts', function($query) use ($post){
                $query->where('category_id', $post->category_id);
                })->get() as $user)
                <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
            @endforeach
        </ul>
      </div>
      <h5 class="card-title pb-3"><i class="fas fa-user"></i> {{$post->user->name}}</h5>
      <p class="card-text bg-white p-3" style="border-radius: 10px;">{{$post->post}}</p>
    </div>
  </div>
  @endforeach
  </div> 
  

@endsection

