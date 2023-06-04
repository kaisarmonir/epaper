









<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:title" content="E-paper">
        <meta property="og:desacription" content="Read epaper online easily.">
        <meta property="og:image" content="https://demo.naadunedu.com/img/1685281461lSZFypEs7f.jpg">

        <title>E-paper</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="4rtDarcl"></script>
        <div class="min-h-screen bg-gray-100">




           <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px  sm:flex">
                     <x-nav-link :href="url('/')" :active="request()->routeIs('dashboard')">
            home
         </x-nav-link>

         @foreach ($site as $page)

         <a href="/page/{{$page->id}}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">{{$page->link}}</a>


 @endforeach




                </div>



            </div>




            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
   <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">



                            <x-responsive-nav-link :href="url('/')" :active="request()->routeIs('dashboard')">
                                {{ __('home') }}
                            </x-responsive-nav-link>

                             @foreach ($site as $page)


                           <a href="/page/{{$page->id}}" class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">{{$page->link}}</a>
 @endforeach

                    </div>


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">



        </div>
    </div>
</nav>







            <!-- Page Heading -->

                <header class="bg-white shadow hidden sm:block">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold p-0 m-0 text-xl text-gray-800 leading-tight">
            <img src="{{url('/logo.png')}}" class="Logo p-o m-o d-none sm:d-block" alt="Logo">
        </h2>
                    </div>
                </header>


            <!-- Page Content -->
            <main>


    <!-- Page Content --------------- ---------------------- --- -->




<div>
<div flex justify-between>


</div>
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
                     <img src="/less.png" id="butt" class="left-mid block lg:hidden flex-col" alt="pre" x-on:click="previousPhoto()">

<img src="/greater.png" id="butto" class="right-mid block lg:hidden flex-col" alt="next" x-on:click="nextPhoto()">
                    <div class="hidden text-center items-center thumb bg-white lg:inline-block w-1/4">

                        @foreach ($epaper as $key => $epaper)


                        <img src="/img/{{$epaper->thumbnail}}" :class="{'ring-2 opacity-50': currentPhoto == {{$key}}}" class="w-full" x-on:click="pickPhoto({{$key}})"><p text-center>page{{$key+1}}</p><br/>


                        @endforeach



                    </div>



                    <div class="paper bg-white">

                        <div class="flex justify-between text-center my-1">
                        <div class="flex-col w-1/2 ">
                            <div class="flex justify-between">
                            <div class="flex-col w-1/3 py-3 face"><a href="http://facebook.com" class="fa fa-facebook"></a></div>
                            <div class="flex-col w-1/3 py-3 twit"><a href="http://twitter.com" class="fa fa-twitter"></a></div>
                            <div class="flex-col w-1/3 py-3 goog"><a href="#" class="fa fa-google"></a></div>
                        </div>
                        </div>


                    <div class="flex-col w-1/2">
                        <div class="flex justify-between">
                        <div class="flex-col w-1/3 py-3 link"><a href="http://linkedin" class="fa fa-linkedin"></a></div>
                        <div class="flex-col  w-1/3 py-3 yout"><a href="http://youtube.com" class="fa fa-youtube"></a></div>
                        <div class="flex-col w-1/3 py-3 inst"><a href="http://instragram.com" class="fa fa-instagram"></a></div>

                    </div>
                    </div>

                </div>


                <div class="flex justify-between">
                    <div>



                <div class="fb-share-button" data-href="https://demo.naadunedu.com/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemo.naadunedu.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share this page</a></div>

                <a href="{{url('/pdf-show')}}"><i class="fa fa-file-pdf-o ml-1" style="font-size:14px;color:red"></i></a></div> <div>
                    <label for="birthday">date:</label>
                    <input type="date" id="birthday" value="2023-05-28"></div></div>

                    <img x-ref="mainImage" src="" loading="lazy" alt="epaper" onclick="popupf()" id="pop">



                    </div>

                </div>
<iframe class="w-full sm:w-1/2 mx-auto my-10px" height="315" src="https://www.youtube.com/embed/sAzlWScHTc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

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
        href="#"
        >Netra Services</a
      >
    </div>
  </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('photoGalleryApp', () => ({
            currentPhoto: 0,
            photos: [

            @foreach ($epaper2 as $epaper)


                "/img/{{$epaper->image}}",

                @endforeach
            ],
            init() { this.changePhoto(); },
            nextPhoto() {
                if ( this.hasNext() ) {
                    this.currentPhoto++;
                    this.changePhoto();
                }
            },
            previousPhoto() {
                if ( this.hasPrevious() ) {
                    this.currentPhoto--;
                    this.changePhoto();
                }
            },
            changePhoto() {
                this.$refs.mainImage.src = this.photos[this.currentPhoto];

            },

            pickPhoto(index) {
                this.currentPhoto = index;
                this.changePhoto();
            },
            hasPrevious() {
                return this.currentPhoto > 0;
            },
            hasNext() {
                return this.photos.length > (this.currentPhoto + 1);
            }
            }))
        })
    </script>

<!-- ------------ --------------- ----------------- ----------------- -->

 </main>
        </div>

        <script>

const audio = new Audio("/flip.mp3");
const buttonss = document.getElementById("butto");


  buttonss.addEventListener("click", () => {
    audio.play();
  });
</script>

<script>

    const audi = new Audio("/flip.mp3");
    const buttons = document.getElementById("butt");


      buttons.addEventListener("click", () => {
        audio.play();
      });
    </script>


<script>
    function popupf(){
        $el=document.getElementById("pop")
        alert($el.getAttribute("src"));
    }
</script>


    </body>
</html>

