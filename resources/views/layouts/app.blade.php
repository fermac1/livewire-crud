<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @livewireStyles
    <style>
        body {
                margin: auto;
                display: flex;
                justify-content: center;
                text-align: center;
            }
        table{
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid;
        }
    </style>
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>