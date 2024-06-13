<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Tailwind</title>
  <link href="output.css" rel="stylesheet">
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-50">
    <div class="bg-white p-8 rounded shadow-md sm:max-w-md sm:w-full">
      <h1 class="text-2xl font-bold mb-4">Iniciar sesión</h1>
      <form class="space-y-4">
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electrónico</label>
          <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Correo electrónico">
        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
          <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contraseña">
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar sesión</button>
      </form>
    </div>
  </div>

</body>
</html>