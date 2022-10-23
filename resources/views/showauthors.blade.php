@extends('base')
@section('content')

<div class="container">
  <div class="justify-content-between row row-cols-md-1 g-2">
 
    <h1 class="text-white">AUTHORS:</h1>
    <hr>
    @foreach($users as $user)
    @if ($user->gender == 'Male')
    <div class="card align-self-stretched border-white mb-3 " style="background-color: rgb(66, 116, 255); width: 31%">
      @else
      <div class="card align-self-stretched border-white mb-3 " style="background-color: rgb(255, 155, 170);width: 31%">
    @endif
      <div class="card-body text-center">
        <div class="card-header bg-dark text-light"><i class="fas fa-user"></i><br>{{$user->name}}</div>
        <p>Total Posts: {{$user->posts()->count()}}</p>
        <a href="/authors/{{$user->id}}" class="btn btn-sm btn-warning">SHOW</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
<style>
  ..card{
  border-radius: 4px;
  box-shadow: 0 12px 20px rgba(0,0,0,16), 0 0 12px rgba(0,0,0,.10);
  transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

</style>