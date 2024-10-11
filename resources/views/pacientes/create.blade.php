<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="{{ mix('js/app.js') }}"></script>



</head>

<body class="bg-white">
    <div class=" container mx-auto shadow-xl">
        <div class="bg-cian text-gray-700 font-bold py-6 px-10 rounded-lg   bg-sky-300">
            <h1 class="text-2xl font-bold text-navy-600 text-center">Crear Nuevo Paciente</h1>
        </div>
    </div>

    </div>

    <main class="container mx-auto mt-6 p-4">
        <form action="{{ route('pacientes.store') }}" method="POST"
            class="max-w-md mx-auto shadow-xl px-4 py-2 rounded-lg">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="edad" class="block text-gray-700 text-sm font-bold mb-2">Edad:</label>
                <input type="number" name="edad" id="edad"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="numero_contacto" class="block text-gray-700 text-sm font-bold mb-2">Número de
                    Contacto:</label>
                <input type="text" name="numero_contacto" id="numero_contacto"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                <input type="text" name="direccion" id="direccion"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="tipo_de_tratamiento" class="block text-gray-700 text-sm font-bold mb-2">Tipo de
                    Tratamiento:</label>
                <input type="text" name="tipo_de_tratamiento" id="tipo_de_tratamiento"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="flex justify-center items-center py-3 text-gray-700 ">
                <button type="submit"
                    class="shadow-md rounded-full bg-sky-300 hover:bg-sky-600 t hover:text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline justify-center">
                    Guardar
                </button>
            </div>


        </form>

    </main>
    <footer class="bg-navy-600
                     text-gray-600 p-4 text-center mt-6">
        <p>&copy; 2024 DandyCode. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
