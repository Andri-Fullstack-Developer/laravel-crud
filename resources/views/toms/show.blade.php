<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tomaloy: {{ $tom->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full py-7 px-10 bg-white-50 flex justify-between sm:gap-2 border-2 border-gray-200">
        <div>
         <h2 class="text-3xl font-bold">Tomaloy</h2>
         <h3 class="text-lg text-gray-400 mt-0.5">Care Point for Your Cat</h3>
        </div>

        <div class="buttons flex gap-2">
         <a href="{{ URL::to('toms') }}" class="hover:shadow-sm  inline-flex items-center rounded-md bg-indigo-600 px-5 py-4 text-md font-semibold text-white shadow-sm hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View All Toms</a>

         <a href="{{ URL::to('toms/create') }}" class="shadow-md hover:shadow-none inline-flex items-center text-indigo-600 rounded-md border-2 border-indigo-600 px-5 py-4 text-md font-semibold hover:bg-indigo-600  hover:text-white hover:border-transparent">Create a Tom</a>
        </div>
     </header>

     <section id="tom" class="flex items-center pt-12 w-full">
        <div class="w-1/2 p-6 mx-auto bg-white rounded-xl shadow-lg space-x-4 flex items-center justify-around">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5JCtmr6zRcaRwylHko_W243s7zaYjYYliOg&usqp=CAU" alt="" class="w-22 h-22"/>

            <div class="">
              <h2 class="text-4xl font-bold text-black uppercase">{{ $tom->name }}</h2>
              <h3 class="text-slate-500">{{ $tom->email }}</h3>
              <p class="text-slate-500">Room: {{ $tom->level }}</p>
            </div>
        </div>
     </section>
</body>
</html>
