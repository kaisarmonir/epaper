<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" >
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
                    <div class="paper bg-white"><div :class="{'cursor-not-allowed opacity-50': ! hasPrevious()}" >
                        <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="h-8" x-on:click="previousPhoto()">
                            <path d="m42.166 55.31-24.332-25.31 24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.125"/>
                        </svg>
                    </div>
                    <div class="w-full sm:w-108 flex justify-center">
                        <img x-ref="mainImage" class="w-full sm:w-auto sm:h-80" src="" loading="lazy" />
                    </div>
                    <div :class="{'cursor-not-allowed opacity-50': ! hasNext()}" >
                        <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="h-8" x-on:click="nextPhoto()">
                            <path d="m17.834 55.31 24.332-25.31-24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.125"/>
                        </svg>
                    </div></div>
                </div>

                <div x-data="photoGalleryApp" class="max-w-xl flex flex-col">
                    <div class="flex items-center sm:h-80">
                        <div :class="{'cursor-not-allowed opacity-50': ! hasPrevious()}" >
                            <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="h-8" x-on:click="previousPhoto()">
                                <path d="m42.166 55.31-24.332-25.31 24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.125"/>
                            </svg>
                        </div>
                        <div class="w-full sm:w-108 flex justify-center">
                            <img x-ref="mainImage" class="w-full sm:w-auto sm:h-80" src="" loading="lazy" />
                        </div>
                        <div :class="{'cursor-not-allowed opacity-50': ! hasNext()}" >
                            <svg version="1.0" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="h-8" x-on:click="nextPhoto()">
                                <path d="m17.834 55.31 24.332-25.31-24.332-25.31v50.62z" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.125"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center mt-1 space-x-1">
                        <img src="/img10.jpg" :class="{'ring-2 opacity-50': currentPhoto == 0}" class="h-16 w-16" x-on:click="pickPhoto(0)">
                        <img src="/img11.jpg" :class="{'ring-2 opacity-50': currentPhoto == 1}" class="h-16 w-16" x-on:click="pickPhoto(1)">

                    </div>
                </div>

        </div>
    </div>
</x-app-layout>
