<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Global Supply Chain Risk Intelligence Platform
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-gray-800">
                    Welcome 👋
                </h3>

                <p class="mt-2 text-gray-600">
                    Selamat datang di <strong>Global Supply Chain Risk Intelligence Platform</strong>.
                </p>

                <p class="text-gray-600">
                    Sistem ini digunakan untuk memantau risiko rantai pasok global berdasarkan
                    data negara, cuaca, ekonomi, nilai tukar mata uang, dan berita internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-blue-500 text-white rounded-lg p-6">
                    <h4 class="text-lg font-semibold">Countries</h4>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-green-500 text-white rounded-lg p-6">
                    <h4 class="text-lg font-semibold">Ports</h4>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-yellow-500 text-white rounded-lg p-6">
                    <h4 class="text-lg font-semibold">Latest News</h4>
                    <p class="text-3xl font-bold mt-2">0</p>
                </div>

                <div class="bg-red-500 text-white rounded-lg p-6">
                    <h4 class="text-lg font-semibold">Average Risk</h4>
                    <p class="text-3xl font-bold mt-2">0%</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>