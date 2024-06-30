<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Auth System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script>document.documentElement.classList.add('js')</script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        
        <!-- classes used for header navigation links -->
        @php
            $navClasses = "rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:ease-in hover:duration-300 hover:text-green-300 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white";
            $inLineLink = "text-green-300 hover:ease-in hover:duration-300 hover:text-white italic";
            $infoContainers = "flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]";       
        @endphp

        <div class="bg-teal-700 text-black/50 dark:bg-black dark:text-white/50">
            
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#86EFAC] selection:text-black">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img class="w-14 h-14" src="../public/images/logo.png">
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    @if(auth()->user()->role === 'admin')
                                    <a
                                        href="{{ url('/admin-dashboard') }}"
                                        class="{{ $navClasses }}"
                                    >
                                        Admin Dashboard
                                    </a> 
                                    @else
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="{{ $navClasses }}"
                                    >
                                        Dashboard
                                    </a>
                                    @endif
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="{{ $navClasses }}"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="{{ $navClasses }}"
                                    >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <!-- body of web page-->
                    <main class="">
                        <div class="grid gap-4 lg:grid-rows-2 lg:gap-8">
                        <!------------------------------- heading -------------------->
                            <div
                                class="flex grid-cols-2 items-start gap-2 overflow-hidden rounded-lg p-6 md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >

                                <div class="relative flex items-center gap-6 lg:items-end mt-14">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h1 class="text-8xl font-bold text-white dark:text-white">User Authentication System</h2>

                                            <p class="mt-4 text-lg/relaxed text-slate-50">
                                                <a href="{{ route('register') }}" class="{{ $inLineLink }}"> Click here</a> to register an account. If you already have an account, <a href="{{ route('login') }}" class="{{ $inLineLink }}">click here</a> to log in. Admins can <a href="{{ route('admin.register') }}" class="{{ $inLineLink }}">register separately</a> by using an active admin key.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="relative flex items-center gap-6 lg:items-end mt-14">
                                    <img src="../public/images/bg-img.gif">
                                </div>
                            </div>

                        <!-------------------------------framework card----------------------------------->
                            <div class="{{ $infoContainers }} delay-[100ms] duration-[800ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" 
                            data-taos-offset="200"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#32CD32]/10 sm:size-16">
                                    <img src="../public/images/laravel-icon.png" class="w-10 h-10">
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Framework used: Laravel</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                    Laravel is a free and open-source PHP-based web framework for building high-end web applications. It was intended for the development of web applications following the MVC pattern.
                                    </p>
                                </div>

                                <a href="https://laravel.com/"><img class="w-full" src="../public/images/arrow.png"></a>
                            </div>

                        <!---------------------------starter kit------------------------------>
                            <div
                                class="{{ $infoContainers }}delay-[300ms] duration-[800ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" 
                            data-taos-offset="200"
                            >
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#32CD32]/10 sm:size-16">
                                    <img src="../public/images/laravel-breeze.png" class="w-14 h-14">
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Starter kit used: Breeze</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                    Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation.
                                </p>
                                </div>

                                <a href="https://laravel.com/docs/11.x/starter-kits#laravel-breeze"><img class="w-full" src="../public/images/arrow.png"></a>
                            </div>

                        <!-- vibrant ecosystem -->
                            <div class="{{ $infoContainers }}delay-[500ms] duration-[800ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" 
                            data-taos-offset="200"
                            >
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#32CD32]/10 sm:size-16">
                                    <img src="../public/images/hashing.png" class="w-10 h-10">
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Use-case: Secure log in and registration functionality</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                    Users can sign up for an account, log in securely and access protected routes only after successful authentication. Password hashing, session management, and user role-based access control is all managed by different controllers. Protected routes cannot be accessed unless authenticated.</p>
                                </div>
                                </div> 

                            <!-- end of page body-->
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-white dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</br>
                        "Next" icon created by <a href="https://www.flaticon.com/free-icons/next" title="next icons" class="{{$inLineLink}}">chehuna - Flaticon</a>
                    </footer>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    </body>
</html>
