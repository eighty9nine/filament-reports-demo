<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
{{--    // add favicon--}}
    <link rel="icon" href="{{asset("img/favicon.png")}}" type="image/png">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filament reports</title>
    @vite('resources/css/app.css')
</head>
<body>

{{--    header--}}
<nav>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl ml-[-27px]">
                <img src="{{asset("img/fr-logo-dark.png")}}" alt="" class="h-12 hidden dark:block">
                <img src="{{asset("img/fr-logo.png")}}" alt="" class="h-12 dark:hidden">
            </a>
        </div>
        <div class="flex-none pr-8 flex gap-3 font-semibold">
            <a href="/docs" class="text-base-content text-md hover:text-primary">Documentation</a>
            <a href="/demo" class="text-base-content text-md hover:text-primary">Demo</a>
            <div>
                <a href="https://github.com/eighty9nine/filament-reports" target="_blank" rel="noopener noreferrer"
                   class="navbar__item navbar__link flex items-center gap-2">GitHub
                    <svg width="13.5" height="13.5" aria-hidden="true" viewBox="0 0 24 24"
                         class="iconExternalLink_nPIU">
                        <path fill="currentColor"
                              d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z"></path>
                    </svg>
                </a>
            </div>
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
                <a href="{{url("demo/reports/sales-report")}}" class="btn btn-primary">See Demo</a>
                <a href="/docs" class="btn btn-info text-base-100">Get started</a>
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

{{--highlights section--}}
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

{{--    features section--}}
<section class="bg-base-100 p-20 flex flex-col gap-24">
    <div class="w-full flex flex-col lg:flex-row gap-5">
        <div class="lg:w-1/3 flex flex-col pt-24 gap-4">
            <p class="text-6xl font-extrabold">Intuitive formatting</p>
            <p class="text-lg">Format using the normal filament table text formatters, to unleash the power of filament
                reports </p>
            {{--            <button class="btn btn-md btn-primary w-fit">See customisations</button>--}}
        </div>
        <div class="mockup-window lg:w-2/3 rounded-xl bg-base-300">
            <video playsinline="" autoplay="" muted="" loop=""
                   class="border-base-300 rounded-xl shadow-2xl z-10">
                <source src="{{asset("videos/column-formatting.mp4")}}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="w-full flex flex-col lg:flex-row-reverse gap-5">
        <div class="lg:w-1/3 flex flex-col pt-24 gap-4">
            <p class="text-6xl font-extrabold">Multiple Tables</p>
            <p class="text-lg">You can add as many tables as you want in the report, with spacer, and text headings</p>
        </div>
        <div class="mockup-window lg:w-2/3 rounded-xl bg-base-300">
            <video playsinline="" autoplay="" muted="" loop=""
                   class="border-base-300 rounded-xl shadow-2xl z-10">
                <source src="{{asset("videos/multiple-tables.mp4")}}" type="video/mp4">
            </video>
        </div>
    </div>
    {{--    multiple tables--}}
    {{--    filters--}}
    {{--    export/print--}}
    {{--    column formatting--}}
    {{--    alignment--}}
    {{--    text formatting--}}
</section>


{{--sponsorware section --}}
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
                    <a href="https://github.com/sponsors/eighty9nine" class="btn btn-info text-base-100">Get Access</a>
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
