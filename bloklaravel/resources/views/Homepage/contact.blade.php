<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Contact Us</title> <style> body { font-family: Arial, sans-serif; background-color:
    #f8f9fa; margin: 0; padding: 0; } header { background-color: #007bff; color: white; padding: 10px; text-align:
    center; } nav { background-color: #343a40; padding: 10px 0; text-align: center; } nav a { color: white;
    text-decoration: none; margin: 0 15px; } .container { max-width: 800px; margin: 20px auto; padding: 20px;
    background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); } .about-content {
    margin-top: 20px; color: #333; line-height: 1.6; } footer { background-color: #343a40; color: white; text-align:
    center; padding: 10px 0; position: absolute; bottom: 0; width: 100%; } h2 { text-align: center; } </style> </head>
    <body>
<header>
    <h1>Wadidiw Blog</h1>
</header>

<nav>
    <a href="{{route('Homepage.home')}}">Home</a>
    <a href="{{route('Homepage.about')}}">About</a>
    <a href="{{route('Homepage.contact')}}">Contact</a>
</nav>

<div class="container">
    <div class="about-content">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec augue eu ex ultrices facilisis.
            Ut
            tincidunt, lorem in feugiat lacinia, neque quam aliquet metus, a aliquet justo purus ut elit. Sed at
            ligula sit amet urna varius vestibulum. Sed ac magna vel elit efficitur fringilla nec in lectus.
            Nullam
            id tristique odio, eu venenatis elit. Curabitur sed nisl sit amet lacus facilisis laoreet. Phasellus
            vel
            neque sed nulla elementum interdum. Integer vitae tristique purus, at hendrerit nulla. Fusce et elit
            sed metus sodales condimentum nec eu erat. Curabitur eu purus quis libero sollicitudin vehicula. Sed
            quis semper ligula.</p>
    </div>
</div>

<footer>
    &copy; 2023 My Awesome Blog. All rights reserved.
</footer>
</body>

</html>