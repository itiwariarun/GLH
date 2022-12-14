 <div class="mb-6 lg:mb-0">
   <div
     class="relative block rounded-lg bg-white from-gray-800 to-slate-700 shadow-lg dark:bg-gradient-to-l dark:shadow-gray-700">
     <div class="flex max-h-[11.4rem] min-h-[11.4rem] px-20 md:px-0">
       <div
         class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:bg-slate-500 dark:shadow-gray-700"
         data-mdb-ripple="true" data-mdb-ripple-color="light">
         {{ $img }} <a href="#!">
           <div
             class="absolute top-0 bottom-0 left-0 right-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
             style="background-color: rgba(251, 251, 251, 0.15)"></div>
         </a>
       </div>
     </div>
     <div class="p-6">
       <h5
         class="mb-3 text-xs font-semibold text-blue-600 hover:text-blue-800 dark:text-slate-300 hover:dark:text-white">
         {{ $h1 }}</h5>

       <p class="mb-4 pb-2 text-lg font-bold dark:text-slate-200">
         {{ $p1 }} </p>
       <p class="mb-4 pb-2 font-serif dark:text-slate-200 md:text-sm">
         {{ $name }} </p>
     </div>
   </div>
 </div>
