@extends('base')

@section('content')
    <div class="container">
        
        <div class="row mb-2">
        <div class="col-md-4 offset-4">
            <div class="card bg-secondary">
                <div class="card-header text-light bg-dark">
                    <h3 class="text-center">ADD POST</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/createpost')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="post">Content</label>
                            <textarea name="post" id="post" cols="30" rows="6" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn  btn-primary w-100 mb-2" type="submit">SAVE</button>
                            <a href="{{ url('/home') }}" class="btn btn-warning text-white d-flex justify-content-center">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
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