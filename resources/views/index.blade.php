<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Form</title>

    <style>
        .uppercase-text {
            text-transform: uppercase;
        }

        .others_input_field {
            width: 340px;
            height: 40px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 13px;
            color: #2C3E50;
            box-sizing: border-box;
            font-family: montserrat;
        }
    </style>
</head>

<body>

    <!-- multistep form -->
    <form id="msform" method="post" action="{{ route('document.submit') }}" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">First Setup</li>
            <li>Model Experience</li>
            <li>Legal Adults</li>
            <li>Your Stats</li>
            <li>Your Dominations</li>
            <li>Question & Ans</li>
            <li>Aggrement</li>
            <li>Network & Signature</li>
        </ul>
        <!-- fieldsets -->
        @include('includes.one-step')
        @include('includes.two-step')
        @include('includes.three-step')
        @include('includes.four-step')
        @include('includes.five-step')
        @include('includes.six-step')
        @include('includes.seven-step')
        @include('includes.eight-step')
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

<script type="text/javascript">
    $("#othersProfessionDiv").hide();
    $("#otherProfession").change(function() {
        if ($(this).is(":checked")) {
            $("#othersProfessionDiv").show();
        } else {
            $("#othersProfessionDiv").hide();
        }
    });

    $("#fetishEntertainDiv").hide();
    $("#fetishEntertain").change(function() {
        if ($(this).val() == 'Others') {
            $("#fetishEntertainDiv").show();
        } else {
            $("#fetishEntertainDiv").hide();
        }
    });
</script>

</html>
