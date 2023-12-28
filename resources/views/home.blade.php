<!doctype html>
<html lang="en" data-theme="black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filament reports</title>
    @vite('resources/css/app.css')
</head>
<body class="dark">

{{--    header--}}
<nav>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">
                <img src="{{asset("img/fr-logo-dark.png")}}" alt="" class="h-12 hidden dark:block">
                <img src="{{asset("img/fr-logo.png")}}" alt="" class="h-12 dark:hidden">
            </a>
        </div>
        <div class="flex-none pr-8">

        </div>
    </div>
</nav>

{{--hero--}}
<section>
    <div class="p-10 flex lg:flex-row flex-col-reverse">
        <div class="lg:w-1/2 flex flex-col">
            <button class="btn btn-sm cursor-copy rounded-full font-mono font-light mt-16 max-w-fit">
                <pre><code>php artisan make:filament-report SalesReport</code></pre>
            </button>
            <h1 class="text-6xl font-bold mt-4">Elegant <span class="text-info">reports</span>
                in your filament application</h1>
            <p class="text-2xl font-extralight mt-4">We are all guilty of slapping a table with some data and calling it
                a
                report, no
                need to feel bad! But after the release of this package if you still use plain tables as reports, then
                you should suffer in the eternal flames </p>
            <div class="flex gap-2 mt-4">
                <a href="{{url("demo/reports/product-evaluation-report")}}" class="btn btn-primary">See Demo</a>
                <button class="btn btn-info">Start Using</button>
            </div>
        </div>
        <div class="lg:w-1/2">
            <div class="relative">
                <div class="mockup-window border bg-base-300 rounded-lg">
                    <img src="{{ asset('img/screenshots/product-evaluation-report-full.png') }}" alt="" class="w-auto">
                </div>
                <div class="absolute right-0 top-[200px] lg:max-w-[400px] hidden lg:block w-full">
                    <img src="{{ asset('img/screenshots/sales-report.png') }}" alt="" class="w-auto">
                </div>
            </div>
        </div>
    </div>
</section>

{{--features--}}
<section class="bg-base-200 mt-14">
    <div class="p-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Beautiful</h2>
                <p class="text-xl font-light mt-4 text-center">The reports are beautiful and easy to read, they are also
                    responsive
                    and
                    look great on mobile devices</p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Easy to use</h2>
                <p class="text-xl font-light mt-4 text-center">The reports are easy to use, you can create a report with
                    just one
                    command</p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Customizable</h2>
                <p class="text-xl font-light mt-4 text-center">The reports are customizable, you can change the colors,
                    the
                    background
                    and
                    even the font</p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Formatting</h2>
                <p class="text-xl font-light mt-4 text-center">Format the color, font size, font weight and much more in
                    the report text</p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Multiple tables</h2>
                <p class="text-xl font-light mt-4 text-center">Add multiple tables with multiple headers and subtitles,
                    for your more complicated reports</p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold mt-4">Filters</h2>
                <p class="text-xl font-light mt-4 text-center">Easily filter the report dataset and allow more report
                    customisation for your users. Supports all filament form components</p>
            </div>
        </div>
    </div>
</section>


{{--section explaining that this package is sponsorware and will be publicly free once I get 50 sponsors--}}
<section class="bg-base-100 p-20">
    <div class="">
        <div class="card w-full bg-base-200 shadow-xl rounded-lg">
            <div class="card-body">
                <p class="text-lg font-bold">Sponsorware</p>
                <p class="text-sm font-light">This package is using the sponsorware model. I intend to make it free
                    until I hit
                    50 sponsors on my github account. I decided to make it a sponsorware since I intend to make this
                    package
                    fully open source, but I also need a bit of cash for my upkeep, and I think once I reach the 50
                    sponsors I will be
                    able to fully commit to work on the package. For now the package will still remain private. Thanks
                    in advance
                    to everyone who intends to support me.</p>
                <p class="text-sm font-light mt-4">If you are interested in sponsoring me, you can do so by clicking the
                    button below,
                    and I will immediately add you as a contributor to the filament reports plugin, so you can use it in
                    your own
                    packages</p>
                <div class=" mt-4">
                    <a href="https://github.com/sponsors/eighty9nine" class="btn btn-info">Get Access</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{--footer--}}
<footer class="footer footer-center p-4 bg-base-300 text-base-content">
    <aside>
        <p>Copyright © {{today()->year}} - All right reserved by 89</p>
    </aside>
</footer>

</body>
</html>
