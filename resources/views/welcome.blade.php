<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GLH</title>
  @livewireStyles

  {{-- googlefont --}}
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')


  {{-- tailwind --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- end --}}


  {{-- tab js packages section --}}
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.22.0/dist/full.css" rel="stylesheet" type="text/css" />
  {{-- end --}}


  {{-- icons --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- end --}}




  {{-- googleicons --}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body class="mx-0.5 bg-white antialiased mostly-customized-scrollbar dark:bg-slate-100/95 ">
  @include('loading')
  <div>

    {{ $slot }}
    {{-- @yield('content') --}}
    <livewire:footer.footer />
    @livewire('livewire-ui-modal')

    @include('progressivebar')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,tailwind-scrollbar" defer>
    </script>
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js" defer></script>

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com" defer></script>
    {{-- alpine --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    {{-- bottom and top progressive bar --}}
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}" defer></script>

    @livewireScripts


  </div>
</body>

</html>