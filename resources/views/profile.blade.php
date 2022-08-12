<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Profile with Tailwindcss</title>
</head>
<body>
    <div class="bg-blue-500">
        <div class="container p-4 mx-auto">
            <div class="p-4 bg-gray-300 rounded-lg shadow-lg">
                <div class="grid grid-cols-12 gap-4">
                    <div class="flex items-center col-span-4 p-2 space-x-2">
                        <div class="relative flex-shrink-0 h-14 w-14">
                            <img src="https://ui-avatars.com/api/?name=Muhammad+Fahmi&color=C0F048&background=4b0082"
                                alt="Muhammad Fahmi" class="object-cover w-full h-full rounded-full shadow">
                            <div class="absolute bottom-0 right-0 bg-white p-[2px] rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h1 class="font-semibold">Muhammad Fahmi Albaihaqi</h1>
                            <p class="font-light text-red-500">Web Developer Engineer</p>
                        </div>
                    </div>
                    <div class="col-span-4 p-2 border-blue-500 border-x-2">
                        <h1 class="mb-3 font-semibold">Contact Detail</h1>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-xs">
                                    IG : fhmalba
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                                <p class="text-xs">
                                    Linkedin : fhmalba
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-xs">
                                    email : fhmalba@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 p-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorem voluptatibus omnis, dolorum autem exercitationem eveniet corporis quisquam nulla rerum.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
