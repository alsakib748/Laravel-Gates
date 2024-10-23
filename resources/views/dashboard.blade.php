{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">

        <br><br>

        @if(Auth::user())

        <h4 class="text-center">{{ Auth::guard('web')->user()->name }}, You are welcome</h4>

        @endif

        {{-- todo: One way to execute gate on blade --}}
        {{-- @if(Gate::allows('isAdmin'))
            <button  class="btn btn-success"> <a href="" class="text-white"> Admin Panel </a></button>
        @endif --}}

        {{-- todo: Second way to execute gate on blade --}}
        {{-- @can('isAdmin')
            <button  class="btn btn-success"> <a href="" class="text-white"> Admin Panel </a></button>
        @else
            <button  class="btn btn-secondary"> <a href="" class="text-white"> Author Panel </a></button>
        @endcan --}}

        {{-- todo: Reverse way to execute gate on blade --}}
        @cannot('isAdmin')
            <a href="" class="text-white"> <button  class="btn btn-secondary">  Author Panel </button> </a>
        @else
            <a href="" class="text-white"> <button  class="btn btn-success">  Admin Panel </button> </a>
        @endcannot

        <a href="{{ route('profile.data', Auth::user()->id) }}" class="text-white"><button  class="btn btn-primary"> Profile </button></a>

        <a href="{{ route('all.post', Auth::id() ) }}" class="text-white"><button  class="btn btn-warning">  Post </button></a>

        <a href="{{ route('logout') }}" class="text-white"><button  class="btn btn-danger">  Logout </button></a>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>


{{-- </x-app-layout> --}}
