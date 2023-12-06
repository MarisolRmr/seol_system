@extends('layouts.appOficinista')

@section('titulo')
    Solicitudes Oficinista
@endsection
<!-- Agrega el elemento a la stack en app.blade.php -->
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido_top')
    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
@endsection

@section('contenido')
<br> <br>
    <div class="relative w-full mx-auto mt-500 ">

        <div id="titulo"
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="{{ asset('img/oficinista/papeles.png') }}" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-black">En Proceso</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-black dark:opacity-60 text-sm">Oficinista</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div id="Solicitudes" class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words">
                <div class="flex flex-wrap -mx-3">
                    @foreach(range(1, 6) as $index)
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 px-3 mb-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                
                                <!-- Estado y Circulito verde -->
                                <div class="flex items-center justify-between p-2">
                                    <span class="text-sm font-semibold dark:text-black">Estado</span>
                                    <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                </div>
                                
                                <!-- Solicitud de -->
                                <div class="flex items-center p-2">
                                    <span class="text-sm font-semibold">Solicitud de</span>
                                </div>
                                
                                <!-- Imagen circular -->
                                <div class="flex items-center justify-center p-4">
                                    <div class="w-16 h-16 overflow-hidden rounded-full">
                                        <img src="{{ asset('img/oficinista/papeles.png') }}" alt="Imagen del alumno" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Alumno -->
                                <div class="text-center">
                                    <p class="text-sm font-semibold mb-1 dark:text-black">Alumno</p>
                                    <p class="text-xs mb-1 dark:text-black">Nombre del alumno</p>
                                </div>
                                
                                <!-- Matricula -->
                                <div class="text-center mb-2">
                                    <h6 class="text-xs font-semibold dark:text-black">Matrícula</h6>
                                    <p class="text-xs dark:text-black">Número de matrícula</p>
                                </div>
                                
                                <!-- Botones -->
                                <div class="flex justify-between p-2">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Aceptar</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-full">Eliminar</button>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
            
            

            

        </div>

        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-white lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            made with <i class="fa fa-heart"></i> by WiTech
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Obtener el elemento select y el enlace
    const selectClase = document.getElementById('claseClase');
    const enlaceClase = document.getElementById('enlaceClase');

    // Escuchar cambios en el select
    selectClase.addEventListener('change', function() {
        // Obtener el valor seleccionado en el select
        const claseId = this.value;

        // Actualizar la URL del enlace con el nuevo valor
        enlaceClase.href = `/estudiante/misclases/${claseId}`;
    });
</script>

@endsection
