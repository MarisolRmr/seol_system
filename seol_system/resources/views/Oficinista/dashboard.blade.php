@extends('layouts.appAdmin')

@section('titulo')
    Dashboard Oficinista
@endsection
<!-- Agrega el elemento a la stack en app.blade.php -->
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

{{-- @section('contenido_top')
    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
@endsection --}}

@section('contenido')
    <div class="relative w-full mx-auto mt-500 ">
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="{{ asset('img/admin/Admin.png') }}" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-black">Dashboard</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-black dark:opacity-60 text-sm">Oficinista</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">

    <div class="w-full max-w-full px-3 shrink-0 md:w-7/12 md:flex-0">
 
    <div class="relative flex flex-col min-w-0 break-words bg-white border-8 shadow-xl rounded-2xl bg-clip-border">
        <img class="w-full rounded-t-2xl" src="{{ asset('img/icono.png') }}" alt="profile cover image">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
            
        </div>
    </div>
</div>


<div class="w-full max-w-full px-3 shrink-0 md:w-5/12 md:flex-0">
<div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
        
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <img class="w-full rounded-t-2xl" src="{{ asset('img/estudiante/estudiante.png') }}" alt="profile cover image">
            </div>
    
        </div>
    </div>
</div>

@endsection
