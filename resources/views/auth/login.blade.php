
    <x-auth-card>




<html>
<head>
<meta charset="UTF-8" name="viewport"
  content="width=device-width, initial-scale=1.0">
<title>login</title>
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('/css/loginsty.css')}}">


</head>
<body>


      <form method="POST" action="{{ route('login') }}">
            @csrf

    <img src="/img/udmlogo.png"style="margin-top:3%;
    display: block;margin-left: auto;margin-right: auto;  width: 25%;">


    <p style="font-size:12px;">CLASS BOOKING SYSTEM[UCBS]</p>

    <span id="error-usrn"style="width: 50%; color: red;">
    <!-- Session Status -->
       <!- <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </span>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
       <input id="username"placeholder="Username" class="input-field form-control block mt-1 w-full " type="username" name="username" :value="old('username')" required autofocus />
    </div>

    <div class="input-container">
      <i class="fa fa-unlock-alt icon"></i>
       <x-input id="password" class="input-field form-control block mt-1 w-full "
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="current-password" />

    </div>
    <x-button class="btn" type="submit" class="btn btn-primary">
      <i class="fa fa-sign-in"></i>{{ __('Login') }}
    </x-button>

    </form>
    <br>
    <br>

    <div class="reset" >
     @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}

          <span class="fa-stack" > <i
        class="fa fa-circle fa-stack-2x"></i> <i
        class="fa fa-undo fa-stack-1x fa-inverse"> </i>
      </span></a>

            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Register') }}

          <span class="fa-stack" > <i
        class="fa fa-circle fa-stack-2x"></i> <i
        class="fa fa-undo fa-stack-1x fa-inverse"> </i>
      </span>  </a>
                @endif


    </div><br><br>

    <hr style="border-color: #e6e6e6; width:60%;"/>

                    <div class="text-center" style="font-size:12px;">
                        Copyright &copy;&nbsp;2021.&nbsp;UDOM CBS (Version No. 1.0)
                    </div>

  <script type="text/javascript">

    function forgot(){

      window.alert("Please Contact System Admin");

    }
  </script>

</body>
</html>
</x-auth-card>

