<!DOCTYPE html>
<html style="background-color: #9198d9;">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"/>
    <title>Sistema de Asistencia</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>


    {{-- Estilos de tailwind --}}
    @vite('resources/css/app.css')
    <!-- Nucleo Icons -->
    <link rel="stylesheet" href="{{asset('css/nucleo-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nucleo-svg.css')}}">
    <link rel="stylesheet" href="{{asset('css/argon-dashboard-tailwind.css')}}">

    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>


    <script src="{{asset('js/argon-dashboard-tailwind.js')}}"></script>
    <script src="{{asset('js/argon-dashboard-tailwind.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>

  </head>


  <body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">


    @yield('contenido_top')

    
    
        <!-- sidenav  -->
        <aside
            class="fixed inset-y-0 flex-wrap items-center overflow-y-auto justify-between block w-full p-0 my-4 antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
            aria-expanded="false">
            <div class="h-19" style="display: flex; justify-content: center;">
                
                <a class=""style="display: flex;justify-content: center;margin-top: 5%;"
                    href=" # ">
                    <img src="{{ asset('img/LOGO-UPV-MODIFICADO-3-1.png') }}"
                        class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-12"
                        alt="main_logo" />
                </a>
            </div>

            <hr
                class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

            <div class="items-center flex-grow flex-basis-full">
                <ul class="flex flex-col pl-0 mb-auto">
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">
                            Administrador</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        
                        <a class="py-2.7   dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{route('admin.alumnoagregar') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door-fill relative top-0 text-sm  text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Alumnos</span>
                        </a>
                        <a class="py-2.7   dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="{{route('admin.gestionPlantilla')}} ">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door-fill relative top-0 text-sm  text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Plantillas</span>
                        </a>
                        <a class="py-2.7   dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                             href="{{route('admin.alumnoOficinista')}}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door-fill relative top-0 text-sm  text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Oficinista</span>
                        </a>
                        
                        <a class="py-2.7   dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                             href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door-fill relative top-0 text-sm  text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Cerrar Sesión</span>
                        </a>
                    </li>
                    

                </ul>
            </div>

        </aside>
        
    <!-- end sidenav -->
        <div
            class="absolute bg-y-50 w-full h-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75" style="height:100%">
            <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
        </div>
        <main style="height:100%" class="relative h-full max-h-screen transition-all duration-200 rounded-xl">
        
            <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    

            <!-- Navbar -->
            <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
                navbar-main navbar-scroll="false">
                {{-- <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                    <nav>
                        <!-- breadcrumb -->
                        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                            <li class="text-sm leading-normal">
                                @auth
                                    <a class="text-white opacity-50"  href=" # "> Home</a>
                                @endauth

                                @guest
                                    <a class="text-white opacity-50" href="#"> Home</a>
                                @endguest

                            </li>
                            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                                aria-current="page">@yield('titulo')</li>
                        </ol>
                        <h4 class="mb-0 font-bold text-white capitalize"> @yield('titulo') </h4>
                    </nav>

                    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                        <div class="flex items-center md:ml-auto md:pr-4">
                            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">


                            </div>
                        </div>

                    </div>
                </div> --}}
            </nav>
            <!-- end Navbar -->

            @yield('contenido')
            


        </main>

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

        <script src="{{ URL::asset('js/jquery/jquery.min.js') }}"></script>
        <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        <script src="{{ URL::asset('js/datatables.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
            integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"
            integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <!--Js-->
        <!--Select2-->
        
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        

    
</body>
    <script src="{{asset('js/argon-dashboard-tailwind.js')}}"></script>
    <script src="{{asset('js/argon-dashboard-tailwind.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
</html>
