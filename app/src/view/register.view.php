<?php require 'partials/nav.view.php' ?>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
        <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
            <form action="" method="post">
                <div class="px-5 py-7">
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">
                        Nome
                        <input name="name" type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    </label>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">
                        Usuário
                        <input name="username" type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    </label>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">
                        E-mail
                        <input name="email" type="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    </label>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">
                        Senha
                        <input name="password" type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    </label>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">
                        Confirme sua senha
                        <input name="passwordConfirmation" type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    </label>
                    <button type="submit" class="transition duration-200 bg-indigo-700 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Cadastrar-se</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </form>
            <div class="py-5">
                <div class="text-center">
                    <div class="text-center whitespace-nowrap">
                        <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            <span class="inline-block ml-1">Esqueceu a senha ?</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>