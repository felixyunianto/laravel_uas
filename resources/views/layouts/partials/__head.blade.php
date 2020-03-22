<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Point Of Sale') }}</title>

{{-- <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script> --}}

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/assets/media/image/favicon.png')}}" />

<!-- Plugin styles -->
<link rel="stylesheet" href="{{asset('assets/vendors/bundle.css')}}">

<!-- DataTable -->
<link rel="stylesheet" href="{{asset('assets/vendors/dataTable/datatables.min.css')}}">

<!-- Prism -->
<link rel="stylesheet" href="{{asset('assets/vendors/prism/prism.css')}}">

<!-- App styles -->
<link rel="stylesheet" href="{{asset('assets/assets/css/app.min.css')}}">
<script src="{{asset('assets/vendors/bundle.js')}}"></script>
