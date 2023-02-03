<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-indigo-700">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <h1 class="text-xl text-white font-bold">Finanças</h1>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="text-slate-50 hover:bg-slate-50 hover:text-black px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/login" class="text-slate-50 hover:bg-slate-50 hover:text-black  px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>
            <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
        </div>
    </div>

    <!--hero-->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-700">Organize-se</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Melhor forma para organizar seus gastos </p>
                <p class="mt-6 mb-6 text-lg leading-8 text-gray-600">Cadastre seus gastos, os tipos, valores e formas de pagamento e receba um relatório dos seus gastos no seu e-mail no começo do mês.</p>
                <a href="/register" class="bg-indigo-700 hover:bg-violet-700 text-white px-5 py-4 rounded-md text-base font-medium">Cadastre-se</a>
            </div>
        </div>
    </div>
</nav>

</body>
</html>