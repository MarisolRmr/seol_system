@extends('layouts.appEstudiante')

@section('titulo')
    Solicitudes Estudiante
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

        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="{{ asset('img/maestro/misclases.png') }}" alt="profile_image"
                            class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-black">Solicitud de Documentos</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-black dark:opacity-60 text-sm">Estudiante</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">

            <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                        <div class="flex items-center">
                            <p class="mb-0 dark:text-black/80">Seleccione el documento</p>

                        </div>
                    </div>
                    <form action="{{ route('estudiante.solicitudes') }}" method="POST" novalidate>
                        @csrf
                        <div class="flex-auto p-6">
                            <div class="mb-4">
                                <label for="claseClase"
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Docuemnto</label>
                                <select id="tipo" name="tipo"
                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none @error('materiaClase') border-red-500 @enderror">
                                    <option value="1">Constancia</option>
                                    <option value="2">Historial</option>
                                    <option value="3">Credencial</option>

                                </select>
                                {{--
                                <input type="hidden" name="selectedClass" id="selectedClass" value="">
                                --}}
                            </div>

                            <input type="submit" value="Solicitar"
                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                            {{--
                        <a id="enlaceClase" href="#" class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                            Solicitar
                        </a>
                        --}}
                    </form>
                </div>


            </div>
        </div>

        <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

                <img class="w-full rounded-t-2xl" src="{{ asset('img/login_2.png') }}" alt="profile cover image">

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

    {{--
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
--}}
@endsection
