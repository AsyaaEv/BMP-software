x
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>{{ $page['title'] }}</title>
    <link rel="shortcut icon" href="{{ asset('img/logoB.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        #content {
            width: max-content;
        }

        #typing {
            border-right: 1px solid black;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 3s steps(30) infinite alternate, blink 0.7s infinite;
        }

        #logoB {
            animation: gerak 3s infinite;
            scale: 0.5;
        }

        @keyframes gerak {
            0% {
                transform: translateY(0px);
            }

            25% {
                transform: translateY(10px);
            }

            50% {
                transform: translateY(0px);
            }

            75% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }

        }

        @keyframes typing {
            0% {
                width: 0%;
                visibility: hidden;
            }

            100% {
                width: 100%;
            }

        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }

            100% {
                border-color: black;
            }
        }
    </style>
</head>

<body class="bg-bg">
