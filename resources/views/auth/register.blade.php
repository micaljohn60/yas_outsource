<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0e4c6fcdab.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link href={{env("APP_ENV") != 'production' ? asset('css/style.css')  : "https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/style.css" }} rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}"> --}}
    <link href={{env("APP_ENV") != 'production' ? asset('css/loginstyle.css')  : "https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/loginstyle.css" }} rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="{{ asset('css/credit_card.css') }}"> --}}
    <link href={{env("APP_ENV") != 'production' ? asset('css/credit_card.css')  : "https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/credit_card.css" }} rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href={{env("APP_ENV") != 'production' ? asset('css/app.css')  : "https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/app.css" }} rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <!-- Style -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

    <title>Register in to Outsource</title>
</head>

<body>
    @php
        $isFreeUser = request()->get('ptype') == 'premium' || request()->get('ptype') == 'pro' ? false : true;
        $userType = request()->get('utype');
    @endphp

    @if ($userType == 'buyer' || $userType == 'seller' || $userType == 'expert')
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="d-lg-flex half">

                <div
                    @if ($isFreeUser) class="d-flex justify-content-center align-items-center col-lg-12" @else class="bg order-1 order-md-2 d-flex justify-centent-center align-items-center border border-right" @endif>

                    <div class="container">
                        {{ request()->get('status') }}
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7">
                                <h3><strong>Create New Account </strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group last mb-3">
                                            <label for="firstName">Frist Name</label>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" required autocomplete="type" placeholder="First name"
                                                value="{{ old('first_name') }}" id="firstName">
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group last mb-3">
                                            <label for="lastName">Last Name</label>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" required autocomplete="current-password"
                                                placeholder="Last Name" id="last_name">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group first">
                                    <label for="username">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="your-email@gmail.com" id="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3 mt-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password"
                                        placeholder="Your Password" id="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group last mb-3">
                                    <label for="password">{{ __('Re-Type Password') }}</label>
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Your Password" id="password_confirmation">

                                </div>

                                <div class="form-group last mb-3">
                                    <div class="mb-3">
                                        <label class="text-lg text-gray-600 font-semibold">You are creating account as : {{$userType}}</label>
                                        <input type="hidden" class="" value="{{$userType}}" name="type" />
                                        <input type="hidden" class="" value="{{request()->planid}}" name="planId" />
                                        <input type="hidden" class="" value="monthly" name="duration" />
                                    </div>
                                    {{-- <select class="form-select" aria-label="Default select example" name="type">
                                        <option value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
                                        <option value="expert">Expert</option>
                                    </select> --}}

                                    <input type="hidden" name="access_type"
                                        @if ($isFreeUser) value="FREE" @else value="PREMIUM" @endif>
                                </div>



                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0" for="remember"><span class="caption">

                                            {{ __('Remember Me') }}

                                        </span>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <div class="control__indicator"></div>
                                    </label>
                                    {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}

                                </div>
                                <button type="submit"
                                    class="bg-main hover:bg-gray-700 text-white font-bold py-4 px-4 rounded w-full">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    @if ($isFreeUser) class="d-none" @else class="bg order-1 order-md-2 d-flex justify-centent-center align-items-center" @endif>

                    <div class="creditCardForm">
                        <div class="heading">
                            <h1>Payment Information</h1>
                        </div>
                        <div class="payment">

                            <div class="form-group owner">
                                <label for="owner">Card Holder Name</label>
                                <input type="text" class="form-control" name="card_holder_name"
                                    id="card_holder_name">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvc" name="cvc">
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" name="card_number">
                            </div>
                            <div class="form-group" id="expiration-date">
                                <label for="cardNumber">Expire at</label>
                                <input type="text" class="form-control" name="expire_date" id="expire_date"
                                    placeholder="MM/YY">
                            </div>
                            <div class="form-group" id="credit_cards">
                                <img src={{ asset('images/visa.jpg') }} id="visa">
                                <img src={{ asset('images/mastercard.jpg') }} id="mastercard">
                                <img src={{ asset('images/amex.jpg') }} id="amex">
                            </div>

                            <div class="form-group" id="pay-now">
                                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <div class="flex justify-center items-center h-screen">
            <section class="flex items-center h-full sm:p-16 dark:bg-gray-900 dark:text-gray-100">
                <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8 space-y-8 text-center sm:max-w-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-40 h-40 dark:text-gray-600">
                        <path fill="currentColor" d="M256,16C123.452,16,16,123.452,16,256S123.452,496,256,496,496,388.548,496,256,388.548,16,256,16ZM403.078,403.078a207.253,207.253,0,1,1,44.589-66.125A207.332,207.332,0,0,1,403.078,403.078Z"></path>
                        <rect width="176" height="32" x="168" y="320" fill="currentColor"></rect>
                        <polygon fill="currentColor" points="210.63 228.042 186.588 206.671 207.958 182.63 184.042 161.37 162.671 185.412 138.63 164.042 117.37 187.958 141.412 209.329 120.042 233.37 143.958 254.63 165.329 230.588 189.37 251.958 210.63 228.042"></polygon>
                        <polygon fill="currentColor" points="383.958 182.63 360.042 161.37 338.671 185.412 314.63 164.042 293.37 187.958 317.412 209.329 296.042 233.37 319.958 254.63 341.329 230.588 365.37 251.958 386.63 228.042 362.588 206.671 383.958 182.63"></polygon>
                    </svg>
                    <p class="text-3xl">Looks like wen can't define user type! Please Try Again</p>
                    <a rel="noopener noreferrer" href="{{route('pricinglists')}}" class="px-8 py-3 font-semibold rounded dark:bg-violet-400 dark:text-gray-900">Check Pricing Lists</a>
                </div>
            </section>
        </div>

        @endif


        {{-- <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#proposal').DataTable();
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script> --}}

        <script src={{ asset('script/jquery.payform.min.js') }} charset="utf-8"></script>
        <script src={{ asset('script/script.js') }} charset="utf-8"></script>
</body>

</html>
