<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','BLOGS')}}</title>       
        <link rel="stylesheet" href="{{asset('css/app.css')}}" /> 
    </head>
    <body>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">Fixed navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Blog</a>
                          </li>
                      </ul>
                      <ul class="navber navbar-right">
                          <li class="nav-item">
                              <a class="nav-link" href="/posts/create">Create blog</a>
                            </li>
                      </ul>
                    </div>
                  </nav>
                  
                  <main role="main" class="container">
                    <div class="jumbotron">
                      @include('inc.messages')

                      @yield('content')
                      
                    </div>
                  </main> 
                  
                  
                  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                  <script>
                      CKEDITOR.replace( 'article-ckeditor' );
                  </script>           
    </body>
</html>
