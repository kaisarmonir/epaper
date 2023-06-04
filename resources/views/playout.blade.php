<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold p-0 m-0 text-xl text-gray-800 leading-tight">
            <img src="{{url('/logo.png')}}" class="Logo p-o m-o d-none sm:d-block" alt="Logo">
        </h2>
    </x-slot>
<div>




</div>

    <div class="py-12" x-data="photoGalleryApp" >





        <div class="bg-white shadow">
            <div class="w-full block sm:hidden">
                <h2 class="font-semibold p-0 m-0 text-xl text-gray-800 leading-tight">
                    <img src="{{url('/logo.png')}}" class="Logo w-full " alt="Logo">
                </h2>
            </div>
        </div>





        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1 flex text-gray-900">




                    <div class="paper bg-white p-4 text-center text-neutral-700 dark:text-neutral-200">



                      <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 32px; font-weight:600">{{$site[0]->title}}</h1>
                      <p class="text-lg">{{$site[0]->content}}</p>



                    </div>

                </div>






                    </div>

                </div>


                    </div>

                </div>

        </div>
    </div>

    <footer
    class="bg-neutral-200 text-center dark:bg-neutral-700 lg:text-left">
    <div class="p-4 text-center text-neutral-700 dark:text-neutral-200">
      © 2023 Copyright:
      <a
        class="text-neutral-800 dark:text-neutral-400"
        href="https://tailwind-elements.com/"
        >Tailwind Elements</a
      >
    </div>
  </footer>

</x-app-layout>
