<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body >
    
 
 <x-sidebar></x-sidebar>
 
 <div class="p-4 sm:ml-64">
    <div class="p-4  rounded-lg dark:border-gray-700 flex flex-col gap-8">
      {{ $slot }}
    </div>
 </div>
 
</body>

</html>