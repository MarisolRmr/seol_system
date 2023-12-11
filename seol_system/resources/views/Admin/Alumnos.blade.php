
@extends('layouts.appAdmin')
@section('titulo')
    Alumnos Registrados
@endsection

{{-- @section('contenido_top')
    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
@endsection --}}

@section('contenido')
<br> <br>
    <div class="relative w-full mx-auto mt-500 ">

        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="{{ asset('img/admin/Clases.png') }}" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-black">Alumnos Registrados</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-black dark:opacity-60 text-sm">Administrador</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h4 class="mb-0 "></h4>
                            </div>
                            <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                <a href="{{route('admin.alumnoagregar')}}"
                                    class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-blue-500  hover:shadow-xs hover:-translate-y-px tracking-tight-rem bg-x-25"
                                    href="javascript:;"> <i class="fas fa-plus" aria-hidden="true">
                                    </i>&nbsp;&nbsp;Añadir estudiante</a>
                            </div> 
                        </div>
                    </div>
                    <br>
                    <!-- <div class="my-4 space-x-2 y-2" style="display: flex; justify-content:end; margin-right: 20px;">
                        <button onclick="exportToPDF('clase')"
                            class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-blue-500  hover:shadow-xs hover:-translate-y-px tracking-tight-rem bg-x-25 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                                <path fill-rule="evenodd"
                                    d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                            </svg>
                        </button>

                        <button onclick="exportarXLSX('clase')"
                            class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all  rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-blue-500  hover:shadow-xs hover:-translate-y-px tracking-tight-rem bg-x-25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
                            </svg>
                        </button>
                    </div> -->
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table id="table1"
                                class="table table-striped items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Id usuario</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Nombre</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Apellido Paterno</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Apellido Materno</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            CURP</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            RFC</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Matricula</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Carerra</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Correo Electronico</th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($usuarios) > 0)
                                        @foreach ($usuarios as $alumn)
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->id}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->nombre }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->apellido_paterno }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->apellido_materno }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->curp }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->rfc }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->matricula }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->carrera}}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight   dark:opacity-80">
                                                        {{ $alumn->email }}
                                                    </p>
                                                </td>

                                                
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td colspan="6">
                                                <div class="flex justify-center text-sm">
                                                    <div>
                                                        <p class="font-semibold">No hay alumnos registrados</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        $('.btn-delete').on('click', function(e) {
            e.preventDefault();

            let Id = $(this).data('plantilla');

            Swal.fire({
                title: "¿Estás seguro de eliminar este cliente?",
                text: "Una vez eliminado, no podrás recuperar este registro!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true,
                dangerMode: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envía el formulario de eliminación si el usuario confirma
                    $(`#delete-form-${Id}`).submit();
                }
            });
        });

        // Función para truncar el texto y mostrar el botón "ver más"
        function truncateText() {
            const textElements = document.querySelectorAll('.truncated-text-t');
            const textElements2 = document.querySelectorAll('.truncated-text-d');
            const maxCharacters = 50; //  número máximo de caracteres que se muestran mostrar inicialmente

            textElements.forEach((element) => {
                const text = element.textContent;
                if (text.length > maxCharacters) {
                    const truncatedText = text.slice(0, maxCharacters) + ' ...';
                    const fullText = text;

                    element.textContent = truncatedText;

                    const viewMoreButton = document.createElement('button');
                    viewMoreButton.innerText = 'Ver más';
                    viewMoreButton.className = 'view-more-button-t';
                    viewMoreButton.setAttribute('style', ' color: #3B82F6 !important;'); 
                    viewMoreButton.addEventListener('click', () => {
                        element.textContent = fullText;
                        viewMoreButton.style.display = 'none';
                        viewLessButton.style.display = 'inline-block';
                        viewMoreButton.style.color = '#3B82F6';
                        viewLessButton.style.color = '#3B82F6';
                    });

                    const viewLessButton = document.createElement('button');
                    viewLessButton.innerText = 'Ver menos';
                    viewLessButton.className = 'view-less-button-t';
                    viewLessButton.style.display = 'none';
                    viewLessButton.setAttribute('style', 'display: none; color: #3B82F6 !important;'); // Agrega el estilo aquí
                    viewLessButton.addEventListener('click', () => {
                        element.textContent = truncatedText;
                        viewMoreButton.style.display = 'inline-block';
                        viewLessButton.style.display = 'none';
                        viewMoreButton.style.color = '#3B82F6';
                        viewLessButton.style.color = '#3B82F6';
                    });

                    element.parentNode.appendChild(viewMoreButton);
                    element.parentNode.appendChild(viewLessButton);
                }
            });

            textElements2.forEach((element) => {
                const text = element.textContent;
                if (text.length > maxCharacters) {
                    const truncatedText = text.slice(0, maxCharacters) + ' ...';
                    const fullText = text;

                    element.textContent = truncatedText;

                    const viewMoreButton = document.createElement('button');
                    viewMoreButton.innerText = 'Ver más';
                    viewMoreButton.className = 'view-more-button-d';
                    viewMoreButton.setAttribute('style', ' color: #3B82F6 !important;'); // Agrega el estilo aquí
                    
                    viewMoreButton.addEventListener('click', () => {
                        element.textContent = fullText;
                        viewMoreButton.style.display = 'none';
                        viewLessButton.style.display = 'inline-block';
                        
                    });

                    const viewLessButton = document.createElement('button');
                    viewLessButton.innerText = 'Ver menos';
                    viewLessButton.className = 'view-less-button-d';
                    viewLessButton.style.display = 'none';
                    viewLessButton.setAttribute('style', 'display: none; color: #3B82F6 !important;'); // Agrega el estilo aquí
                    
                    viewLessButton.addEventListener('click', () => {
                        element.textContent = truncatedText;
                        viewMoreButton.style.display = 'inline-block';
                        viewLessButton.style.display = 'none';
                        viewMoreButton.style.color = '#3B82F6';
                        viewLessButton.style.color = '#3B82F6';
                    });

                    element.parentNode.appendChild(viewMoreButton);
                    element.parentNode.appendChild(viewLessButton);
                }
            });
        }

        // Ejecutar la función al cargar la página
        window.addEventListener('DOMContentLoaded', truncateText);
    </script>
@endsection
