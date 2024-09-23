<!doctype html>
<html lang="en">
    @notifyCss
<head>
    <?php
    $data = get_master_details();
    ?>
    <link rel="icon" href="{{ asset('fav_icon/' . $data->fav_icon) }}" type="image/x-icon">
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    $data = get_master_details();
    ?>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}

    @yield('css')

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body>
    {{-- header start --}}
    <header>




        <nav class="navbar navbar-light  ;"style="background-color: rgb(152, 145, 80, 0.636)">
            <a class="navbar-brand" href="#">
                <img src=" {{ asset('logo/' . $data->logo) }}" width="50" height="30" alt="">
            </a>
             <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="buttion">
                    <a href="about">About</a>
                </button>
                <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="buttion">
                    <a href="contacts">Contacts</a>
                </button>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('account.logout') }}"
                                id="accountDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="buttion">
               <a href="register">Sig in</a>
            </button> --}}
            </form>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-info d-flex justify-content-end"
            style="background-color: rgba(236, 224, 116, 0.903)">
            <form action="{{ route('razorpay.payment.store') }}" method="POST">
                @csrf
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <button id="payBtn">Pay 100 INR
                </button>
            </form>
            <form class="form-inline my-2 my-lg-0">

                <button class="btn btn-light btn-outline-info my-2 my-sm-0 mr-sm-2" type="buttion">
                    <a href="#">2022</a>
                </button>
                <button class="btn btn-light btn-outline-info my-2 my-sm-0 mr-sm-2" type="buttion">
                    <a href="#">2023</a>
                </button>
                <button class="btn btn-light btn-outline-info my-2 my-sm-0" type="buttion">
                    <a href="#">2024</a>
                </button>
            </form>
        </nav>
    </header>
    {{-- header end --}}
    <script>
        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}",
            "amount": "10000",
            "name": "event",
            "description": "Razorpay payment",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3fQf2BrhhAjr3IYFVWDJdusHpwVG6n0eC_A&s",
            "prefill": {
                "name": "ABC",
                "email": "abc@gmail.com"
            },
            "theme": {
                "color": "#0F408F"
            },
            "handler": function(res) {
                console.log(res);

                $.ajax({
                    url: "/payment/create",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token
                        response: {
                            razorpay_payment_id: res.razorpay_payment_id
                        }
                    },
                    success: function(res) {
                        console.log('Payment data sent to server', res);
                        if (res.success = true) {
                            window.location.href = '/'; //payment failure
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error sending payment failure information:', textStatus,
                            errorThrown);
                    }
                });
            },
            "modal": {
                "ondismiss": function() {
                    // This function is called when the user closes the modal
                    window.location.href = '{{ route('account.home') }}'; // Redirect to your failure page
                }
            }
        };

        var rzp = new Razorpay(options);
        document.getElementById('payBtn').onclick = function(e) {
            rzp.open();
            e.preventDefault();
        }

        rzp.on('payment.failed', function(response) {

            event.preventDefault();
            if (response.reason = "payment_failed") {
                const {
                    error,
                    reason
                } = response;
                $.ajax({
                    url: "/payment/failure",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token
                        response: {
                            error,
                            reason
                        }
                    },
                    success: function(response) {
                        console.log('Payment failure data sent to server', response);
                        if (response.success = true) {
                            window.location.href = '/402'; //payment failure
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error sending payment failure information:', textStatus,
                            errorThrown);
                    }
                });
            }
        });
    </script>
