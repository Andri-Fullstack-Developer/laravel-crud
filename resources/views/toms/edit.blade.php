<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tomaloy: Edit {{ $tom->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full py-7 px-10 bg-white-50 flex justify-between sm:gap-2 border-2 border-gray-200">
       <div>
        <a href="/">

          <h2 class="text-3xl font-bold">Tomaloy</h2>
      </a>
        <h3 class="text-lg text-gray-400 mt-0.5">Care Point for Your Cat</h3>
       </div>

       <div class="buttons flex gap-2">
        <a href="{{ URL::to('toms') }}" class="hover:shadow-sm  inline-flex items-center rounded-md bg-indigo-600 px-5 py-4 text-md font-semibold text-white shadow-sm hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View All Toms</a>

        <a href="{{ URL::to('toms/create') }}" class="shadow-md hover:shadow-none inline-flex items-center text-indigo-600 rounded-md border-2 border-indigo-600 px-5 py-4 text-md font-semibold hover:bg-indigo-600  hover:text-white hover:border-transparent">Create a Tom</a>
       </div>
    </header>

    <section id="tom" class="">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-21 w-21 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5JCtmr6zRcaRwylHko_W243s7zaYjYYliOg&usqp=CAU" alt="Tom is Coming">
              <h2 class="mt-2 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Edit Your Tom</h2>
            </div>

            <div class="mt-10 sm:mx-auto w-1/2">

                @if($errors->any())
                    <ul class="text-red-500 font-medium text-md">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

              <form class="space-y-6" action="{{ route('toms.update', $tom->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block text-lg font-medium leading-6 text-gray-900">Name of Your Tom</label>
                    <div class="mt-2">
                      <input id="name" name="name" type="text" autocomplete="name" value="{{ $tom->name }}" required class="block w-full h-12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6 px-3">
                    </div>
                </div>

                <div>
                  <label for="email" class="block text-lg font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" value="{{ $tom->email }}" required class="block w-full h-12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6 px-3">
                  </div>
                </div>

                <div>
                    <label for="room" class="block text-lg font-medium leading-6 text-gray-900">Room Number</label>
                    <div class="mt-2">
                      <select id="room" name="room" type="room" autocomplete="room" value="{{ $tom->room }}" required class="block w-full h-12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6 px-3">
                        <option value="0">Select a Room</option>
                        <option value="1" {{ $tom->level == 1 ? 'selected' : '' }}>Red Aloy</option>
                        <option value="2" {{ $tom->level == 2 ? 'selected' : '' }}>Yellow Aloy</option>
                        <option value="3" {{ $tom->level == 3 ? 'selected' : '' }}>Pink Aloy</option>
                      </select>
                    </div>
                  </div>


                <div>
                  <input type="submit" value="Meew" class="uppercase flex w-full h-12 justify-center rounded-md bg-indigo-600 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                </div>
              </form>
            </div>
          </div>
    </section>
</body>
</html>
