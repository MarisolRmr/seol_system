@extends('layouts.app')
@section('titulo')
    Login
@endsection
<style>
  .burl_ejem{
    backdrop-filter: blur(15px);
    background: rgba(255, 255, 255, 0.000001);
  }
</style>

@section('contenido')
<main class="mt-0 transition-all duration-200 ease-in-out">
    <section>
      <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center">
        <div class="container z-1">
          <div class="flex flex-wrap -mx-6">
            <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 bg-white rounded-lg">
              <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0">
                  <h4 class="font-bold">Inicia sesión</h4>
                  <p class="mb-0">Ingresa tu usuario y contraseña para comenzar</p>
                </div>
                <div class="flex-auto p-6">
                  <form role="form" action="{{route('login.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="mb-4">
                      <input type="email" name="email" placeholder="Email" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                    </div>
                    <div class="mb-4">
                      <input type="password" name="password" placeholder="Password" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Iniciar Sesión</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
              <div class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden  rounded-xl ">
                <span class=" burl_ejem absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl  "></span>
                  <h1 class="z-20 mt-6 font-bold text-white">Solicitud Escolar Online</h1>
                  <br>
                  <br>
                  <p class="z-20 text-white">
                      Es una plataforma web diseñada para simplificar y agilizar el proceso de solicitud de documentos 
                      y servicios por parte de los alumnos en instituciones educativas.
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection