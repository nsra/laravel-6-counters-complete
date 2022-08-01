<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>بلدية وادي غزة - تطبيق قراءة العداد</title>

        <link rel="stylesheet" href='{{ asset("./css/bootstrap.rtl.min.css") }}' />
        <link rel="stylesheet" href='{{ asset("./css/style.css") }}' />

    </head>
    <body class="antialiased" dir="rtl">
        <div class="relative flex justify-center mt-5 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <br>
                <div class="flex text-center mt-5 pt-8 sm:pt-0">
                  
                    <img src= '{{ asset("./images/Asset1.png")}}' width="170px" alt="">
                </div>

                <br>
                <br>
                <div class="text-center">
                    <a class="btn btn-success btn-lg" href="./counters"> تطبيق قراءة العدادات </a>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    
                    <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                        <br>
                        Copyright &copy; {{date('Y')}} wadiGaza - Eng. Entesar k. ElBanna 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
