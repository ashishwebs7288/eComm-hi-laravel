<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E- Comm Project</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
   {{View::make('header')}} 
    @yield('content')
    {{View::make('footer')}}
    
</body>
<style>
    .custom-login
    {
        height: 400px;
        padding-top:100px;
    }
    img.slider-img
    {
        height: 400px !important;
        width: 100%;
    }
    .custom-product
    {
        height:500px;
    }
    .slider-text
    {
        background-color: #cbcbcb;
    }
    .trandding-image
    {
        height:100px;
    }
    .trandding-item
    {
        float:left;
        
        width:20%;
    }
    .tranding-appear
    {
        margin:30px;
    }
    .search-box
    {
        width: 500px !important;
        
    }
    
    .cart-list-divider
    {
        border-bottom: 5px solid black;
        margin-bottom:20px;
        padding-bottom:20px;
    }
    a{
        text-decoration: none ;
    }
</style>
</html>