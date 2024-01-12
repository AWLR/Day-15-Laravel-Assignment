<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @include('pages.header')
  {{-- <h1>Home page</h1> --}}
  {{-- <nav>
    <a href="/">Home</a>
    <a href="/">About</a>
    <a href="">Contact</a>
  </nav>
@include('pages.header')
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium tempore ducimus temporibus, quo sapiente necessitatibus? Saepe tempora numquam velit iure laboriosam amet aspernatur excepturi, itaque iste eos ipsam, molestias quaerat perferendis at doloribus provident recusandae, mollitia cumque vel 
  optio deleniti sit earum? Eius ut doloremque ad eligendi et laudantium harum.</p>
 
  @include('pages.footer') --}}
@extends('masterlayout')
  @section('content')
  <h2>Home page</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, porro maiores. Doloribus debitis, quas labore sunt nam sint nesciunt laudantium itaque asperiores praesentium molestiae sapiente exercitationem eum vitae aliquam cum veritatis iure, natus est quo? Asperiores pariatur alias, commodi, consequuntur, earum ex eligendi excepturi reiciendis maxime architecto sequi ratione quos?
  </p>
  @endsection

  @section('title')
  Home
  @endsection
 

</body>
</html>