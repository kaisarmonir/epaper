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





                    <div class="paper bg-white text-lg p-4 text-center text-neutral-700 dark:text-neutral-200">

                       For more information Contact me at: <a href="tel:tel019">+917670925495</a>.

</br>


  

<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <input type="submit">
</form>
<div class="col-md-4 col-sm-4 col-xs-12">
  <label for="datepicker">Date of birth*</label>
  <input type="text" name='datepicker' class="form-control"  value="Select date" id="datepicker" ng-required="true" placeholder="MM/DD/YYYY" >
  <span class="fa fa-calendar"></span>
</div>


  <input type="text" data-role="date" data-inline="true" >
  <span class="fa fa-calendar"></span>
</div>



                    </div>
                    
                    





                </div>






                    </div>

                </div>


                    </div>

                </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
</x-app-layout>
