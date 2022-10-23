<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/styles.css')}}">
     <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
     <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('js/popper.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>

     <title>C H E A P T A L K</title>
 </head>
 <body class="bg">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">C H E A P T A L K</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
             <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
             <ul class="navbar-nav ms-auto ">                      
                     @if (!Auth::check())
                     <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/login">Login</a></li>
                     <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/register">Register</a></li>
                    @else
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/home">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1 dropdown">
                         <a class="nav-link dropdown-toggle text-white nav-link py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             @foreach(App\Models\Category::get() as $category)
                             <li>
                                 <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                             </li>
                             @endforeach
                         </ul>
                     </li>
                     <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/authors"><i class="fas fa-users"></i> Authors</a></li>
                     <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/logout"><i class="fas fa-sign-out"></i> Logout</a></li>
                     @endif
                 </ul>
             </div>
         </div>
     </nav>
     <div class="container col-md-6 offset-md-3 mt-2 text-center">
     @if (session('Error')) 
             <div class="alert alert-danger">
                     {{session('Error') }}
                 </div>
             </div>
       @endif  
       @if (session('Message'))
             <div class="alert alert-success">

                     {{session('Message') }}
                 </div>
             </div>
       @endif 
       @if(session('errors'))
             <div class="alert alert-danger ">
                   Please Fill Up!!!
      
                 </div>
             </div>   
         @endif
        </div>
 
     @yield('content')
 </body>
 <style>
.bg{
  
  background-image: url("/images/image2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
  .navbar {
  background: #000000;
}

.nav-item::after {
   content: '';
   display: block;
   width: 0px;
   height: 2px;
   background: rgb(255, 0, 119);
   transition: 0.4s
}

.nav-item:hover::after {
   width: 100%
}

.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show>.nav-link,
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
   color: #0400fe
}
</style>
 </html>