<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"></script>
    <script src="https://secure.gosell.io/js/sdk/tap.min.js"></script>
</head>
<body>
<form id="form-container" method="post" action="{{route('pay.charge')}}">
    @csrf
    <input type="hidden" id="tapToken" name="tapToken">
    {{--    <input type="hidden" name="token" value="{{$token}}">--}}
    <input type="hidden" name="order_id" value="{{$orderid}}">


    <!-- Tap element will be here -->
    <div id="element-container"></div>
    <div id="error-handler" role="alert"></div>
    <div id="success" style=" display: none;position: relative;float: left;">
        Success! Your token is <span id="token"></span>
    </div>
    <!-- Tap pay button -->
    <button id="tap-btn">Payment</button>
</form>

</body>
</html>
