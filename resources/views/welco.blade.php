<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold p-0 m-0 text-xl text-gray-800 leading-tight">
            <img src="{{url('/logo.png')}}" class="Logo p-o m-o d-none sm:d-block" alt="Logo">
        </h2>
    </x-slot>
<div>
<div flex justify-between>
    
    <img src="/less.png" id="butt" class="left-mid block lg:hidden flex-col" alt="pre" x-on:click="previousPhoto()">



    <img src="/greater.png" id="butto" class="right-mid block lg:hidden flex-col" alt="next" x-on:click="nextPhoto()">
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
                    <div class="hidden text-center items-center thumb bg-white lg:inline-block w-1/4">

                        @foreach ($epaper as $key => $epaper)


                        <img src="/img/{{$epaper->thumbnail}}" :class="{'ring-2 opacity-50': currentPhoto == {{$key}}}" class="w-full" x-on:click="pickPhoto({{$key}})"><p text-center>page{{$key+1}}</p><br/>


                        @endforeach



                    </div>



                    <div class="paper bg-white">

                        <div class="flex justify-between text-center my-1">
                        <div class="flex-col w-1/2 ">
                            <div class="flex justify-between">
                            <div class="flex-col w-1/3 py-3 face"><a href="#" class="fa fa-facebook"></a></div>
                            <div class="flex-col w-1/3 py-3 twit"><a href="#" class="fa fa-twitter"></a></div>
                            <div class="flex-col w-1/3 py-3 goog"><a href="#" class="fa fa-google"></a></div>
                        </div>
                        </div>


                    <div class="flex-col w-1/2">
                        <div class="flex justify-between">
                        <div class="flex-col w-1/3 py-3 link"><a href="#" class="fa fa-linkedin"></a></div>
                        <div class="flex-col  w-1/3 py-3 yout"><a href="#" class="fa fa-youtube"></a></div>
                        <div class="flex-col w-1/3 py-3 inst"><a href="#" class="fa fa-instagram"></a></div>

                    </div>
                    </div>

                </div>
                <div class="fb-share-button" data-href="https://demo.naadunedu.com/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemo.naadunedu.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share this page</a></div>

                    <img x-ref="mainImage" src="" loading="lazy" alt="epaper">



                    </div>

                </div>


                    </div>
                    <iframe width="560" class="mx-auto my-10px" height="315" src="https://www.youtube.com/embed/sAzlWScHTc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

        </div>
    </div>

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

</x-app-layout>
