<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body class="font-sans antialiased">
        
    @include('layouts.header')
            <!-- Page Content -->
          
                <!-- <div class="container">
                    <div class="row my-5">
                        <div class="col-12 mb-4">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <h4>Posts</h4>
                                <div class="container-fluid justify-content-end">
                                    <div>
                                        <h1>{{ Auth::user()->name }}</h1>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> -->
            <main>
                <div class="container">
                    <div class="row my-5">
                        <div class="col-12 mb-4">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                
                            </nav>
                        </div>
                    </div>
                    @isset($posts)
                        @foreach ($posts as $post)
                        <form action="{{ route ('comment.store')}}" method="post">
                            @csrf 
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post -> subject}}</h5>
                                    <p><small><b>Author:</b>{{$post-> user->name}}</small></p>
                                  
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    {{$post -> post}}
                                    <hr>
                                    <p class="font-monospace"> For feedback you can email the author on  <a href="">{{$post->user->email}}</a></p>
                                    <hr>
                                    @foreach($post->comment as $comments)
                                        
                                    <p><small><b>Author:</b>{{$comments->user->name}}</small></p>
                                     <p><small><b>Comment:</b>{{$comments->comment}}</small></p>
                                    @endforeach
                                    <textarea name="comment" id="comment" class="w-100"></textarea>
                                    <div class="w-100 mt-1 ">
                                        <button type= "submit" class="btn btn-primary w-30">Save Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    @endisset
                </div>
            </main>
           
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.js')}}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        
    </body>
</html>
