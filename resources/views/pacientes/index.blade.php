<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Dental Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div class="flex flex-col min-h-screen">
        <header class="bg-sky-300 p-4">
            <h1 class="text-center text-2xl text-gray-700 font-bold text-navy-600">Clínica Dental</h1>
        </header>
        <main class="md:flex-auto flex-grow p-6">
            <div x-data="{ activeTab: 'pacientes' }" class="py-2 md:flex-auto flex-grow">
                <div class="flex flex-col sm:flex-row justify-center items-center bg-sky-300 p-2 rounded text-gray-700">
                    <button @click="activeTab = 'pacientes'"
                        :class="{ 'bg-sky-600 text-white': activeTab === 'pacientes' }"
                        class="px-4 py-2 rounded sm:mx-2">Pacientes</button>
                    <button @click="activeTab = 'visitas'"
                        :class="{ 'bg-sky-600 text-white': activeTab === 'visitas' }"
                        class="px-4 py-2 rounded sm:mx-2">Visitas</button>
                    <button @click="activeTab = 'tratamientos'"
                        :class="{ 'bg-sky-600 text-white': activeTab === 'tratamientos' }"
                        class="px-4 py-2 rounded sm:mx-2">Tratamientos</button>
                    <button @click="activeTab = 'agenda'" :class="{ 'bg-sky-600 text-white': activeTab === 'agenda' }"
                        class="px-4 py-2 rounded sm:mx-2">Agenda</button>
                    <button @click="activeTab = 'ortodoncia'"
                        :class="{ 'bg-sky-600 text-white': activeTab === 'ortodoncia' }"
                        class="px-4 py-2 rounded sm:mx-2">Ortodoncia</button>
                </div>

                <div x-show="activeTab === 'pacientes'" class="space-y-4">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Gestión de Pacientes</h2>
                        <a href="{{ action([App\Http\Controllers\PacienteController::class, 'create']) }}"
                            class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Nuevo Paciente
                        </a>

                        <!-- Listado de pacientes -->
                        <div class="overflow-x-auto justify-center">
                            <h3 class="text-lg font-medium mb-2">Listado de Pacientes</h3>
                            <table class="min-w-full bg-white" id="patientTable">
                                <thead class="bg-gray-100 hidden sm:table-header-group">
                                    <tr>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            ID</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Nombre</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Edad</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Contacto</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Email</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Dirección</th>
                                        <th
                                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Tratamiento</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr class="sm:table-row flex flex-col mb-4 border-b sm:border-b-0">
                                            <td class="px-4 py-2 sm:border-b" data-label="ID">
                                                <span class="font-bold sm:hidden mr-2">ID:</span>
                                                {{ $paciente->id }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Nombre">
                                                <span class="font-bold sm:hidden mr-2">Nombre:</span>
                                                {{ $paciente->nombre }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Edad">
                                                <span class="font-bold sm:hidden mr-2">Edad:</span>
                                                {{ $paciente->edad }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Contacto">
                                                <span class="font-bold sm:hidden mr-2">Contacto:</span>
                                                {{ $paciente->numero_contacto }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Email">
                                                <span class="font-bold sm:hidden mr-2">Email:</span>
                                                {{ $paciente->email }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Dirección">
                                                <span class="font-bold sm:hidden mr-2">Dirección:</span>
                                                {{ $paciente->direccion }}
                                            </td>
                                            <td class="px-4 py-2 sm:border-b" data-label="Tratamiento">
                                                <span class="font-bold sm:hidden mr-2">Tratamiento:</span>
                                                {{ $paciente->tipo_de_tratamiento }}

                                            </td>
                                            <td>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M8 21h-2a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 .586 -1.414l11 -11a2 2 0 0 1 2.828 0l2 2a2 2 0 0 1 0 2.828l-11 11a2 2 0 0 1 -1.414 .586z" />
                                                        <path d="M18 12l-6 -6" />
                                                        <path d="M16 5l3 3" />
                                                        <path d="M9 15l-1.5 -1.5" />
                                                    </svg>

                                                </button>


                                            </td>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7l0 -3h6l0 3" />
                                                </svg>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>
                <div x-show="activeTab === 'visitas'" class="space-y-4">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Registro de Visitas</h2>
                        <a href=""
                            class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            Nueva Visita
                        </a>
                    </div>
                </div>

                <div x-show="activeTab === 'tratamientos'" class="space-y-4">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Tratamientos</h2>
                        <a href=""
                            class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                </path>
                            </svg>
                            Nuevo Tratamiento
                        </a>
                    </div>
                </div>

                <div x-show="activeTab === 'agenda'" class="space-y-4">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Agenda de Citas</h2>
                        <a href=""
                            class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            Nueva Cita
                        </a>
                    </div>
                </div>

                <div x-show="activeTab === 'ortodoncia'" class="space-y-4">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Tratamientos de Ortodoncia</h2>
                        <a href=""
                            class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                </path>
                            </svg>
                            Nuevo Tratamiento de Ortodoncia
                        </a>
                    </div>
                </div>



                <!-- Las otras secciones (visitas, tratamientos, agenda, ortodoncia) se mantienen igual -->

            </div>
        </main>
        <footer class="bg-navy-600 text-gray-600 p-4 text-center mt-6">
            <p>&copy; 2024 DandyCode. Todos los derechos reservados.</p>
        </footer>
    </div>
    <script>
        function adjustTableLayout() {
            const table = document.getElementById('patientTable');
            const rows = table.getElementsByTagName('tr');

            if (window.innerWidth < 640) { // 640px es el breakpoint 'sm' en Tailwind por defecto
                for (let row of rows) {
                    row.classList.add('flex', 'flex-col');
                    row.classList.remove('table-row');
                }
                table.classList.add('block');
                table.classList.remove('table');
            } else {
                for (let row of rows) {
                    row.classList.remove('flex', 'flex-col');
                    row.classList.add('table-row');
                }
                table.classList.remove('block');
                table.classList.add('table');
            }
        }

        window.addEventListener('load', adjustTableLayout);
        window.addEventListener('resize', adjustTableLayout);
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
