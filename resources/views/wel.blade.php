<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1 flex text-gray-900">
                    <div class="hidden text-center thumb bg-white xl:inline-block w-1/4"><img src="/img/1.jpg" class="w-full" alt="epaper">
                        <img src="/img/2.jpg" class="w-full" alt="epaper">
                        <a href="/img/10.jpg"><img src="/img/3.jpg" class="w-full" alt="epaper"><p text-center>page10</p></a>
                        <a href="/img/11.jpg"><img src="/img/4.jpg" class="w-full" alt="epaper"><p text-center>page11</p></a>
                        <img src="/img/5.jpg" class="w-full" alt="epaper">
                        <img src="/img/6.jpg" class="w-full" alt="epaper">
                    </div>
                    <div class="paper bg-white"><img src="/img/10.jpg" alt="epaper"></div>
                </div>




                <div class="bg-gray-300 middle"><img src="/img/10.jpg" style="height:auto; width:1500px;"  alt="epaper"></div>

            </div>
        </div>
    </div>
</x-app-layout>
