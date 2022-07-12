<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  {{-- Fontawesome --}}
  FONT AWESOME V6.1.1
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- Tailwindcss --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

  {{-- My Style --}}
  <style>
    @media (max-width: 640px){
      #image-hero{
        display: none;
      }
    }
  </style>


  
  

</head>
<body>
  
  @include('partials.navbar')

  @include('partials.hero')

  @include('partials.aboutsection')



  

</body>
</html>