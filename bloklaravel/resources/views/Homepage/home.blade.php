<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"><style> 
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    position: relative; /* Tambahkan ini */
    min-height: 100vh; /* Tambahkan ini */
}
    header { 
    background-color: #007bff; 
    color: white; 
    padding: 10px; 
    text-align: center; 
} 
nav { 
    background-color: #343a40; 
    padding: 10px 0; 
    text-align: center;
 } 
 nav a { 
    color: white;
    text-decoration: none; 
    margin: 0 15px;
     text-align: center;
     } 
     .container { 
    max-width: 800px; 
    margin: 20px auto;
    padding: 20px;
 background-color: white; 
 border-radius: 10px; 
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 } 
 .post {
    margin-bottom: 40px;
 }
    .post img { 
    width: 100%;
     height: auto;
      border-radius: 10px; 
    } 
    .post h2 { 
    color: #333;
    margin-top: 20px; 
} 
.post p { 
    color: #555; 
    line-height: 1.6;
 } 
 .post-button {
    background-color: white;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px;
    text-decoration: none; /* Remove underline */
    color: #333; /* Change link color to your preferred color */
}

footer { 
    background-color: #343a40;
    color: white;
     text-align: center;
      padding: 10px 0; 
      position: relative; 
      bottom: 0; 
      width: 100%; } 
      </style> 
      
      <title>Wadidiw Blog</title> 
</head>

<body>
    <header>
        <h1>Wadidiw Blog</h1>
        <a class="post-button" href="{{ route('Homepage.post.create') }}">Post</a>

    </header>

    <nav>
        <a href="{{route('Homepage.home')}}">Home</a>
        <a href="{{route('Homepage.about')}}">About</a>
        <a href="{{route('Homepage.contact')}}">Contact</a>
    </nav>
 
    <div class="container">

    @foreach ($posts as $post)
        <div class="post">
            <img src="{{ asset($post->image) }}" alt="Post Image">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endsection
    </div>

    <footer>
        &copy; 2023 My Awesome Blog. All rights reserved.
    </footer>
</body>

</html>