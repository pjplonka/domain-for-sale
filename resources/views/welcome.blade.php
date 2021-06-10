<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buy this domain</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

</head>
<style>
    body {
        background: url(background.jpeg);
        background-repeat: no-repeat;
        background-size: auto;
    }

    .form {
        background-color: #fff;
        color: #000;
        padding: 20px;
        margin: 20px;
    }

    .required-label {
        color: red;
    }
</style>
<body>

<div class="d-flex justify-content-center">

    <div class="form">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('submit-succeed'))
            <p class="alert alert-success">{{ session()->get('submit-succeed') }}</p>
        @endif

        <h1>Do you want to buy this domain?</h1>

        <form method="post" action="/submit-form">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Your name <span class="required-label">*</span></label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Your email address <span class="required-label">*</span></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{ old('email') }}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Your price proposal <span class="required-label">*</span></label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelp" required value="{{ old('price') }}">
                <div id="priceHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="captcha" class="form-label">Code from picture <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="captcha" name="captcha"
                               aria-describedby="captchaHelp" required>
                        <div id="captchaHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    12345
                </div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Additional message</label>
                <textarea class="form-control" id="message" name="message" rows="3">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>

</body>
</html>
