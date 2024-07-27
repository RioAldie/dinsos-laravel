<x-client-layout>
    <div class="text-black w-full items-center justify-center flex flex-col gap-5 p-4">
        <div class=" flex flex-row mt-20 items-center text-center justify-between p-6  border-b-2 border-gray-200 bg-none">
          <h1 class="font-medium text-2xl text-center w-full">Harian Dinsos Nganjuk</h1>
        </div>
            <div class="w-full flex flex-col items-center justify-between rounded-lg border gap-3 p-6">
                <p class="w-4/5 border-b-2 p-2 border-gray-200 text-center  text-2xl font-bold">
                Sosialisi Bullying
                </p>
                <div class=" w-56 text-gray-400 flex flex-row items-center">
                        <p class="flex-1 ms-3 whitespace-nowrap">
                        {{-- {createAt?.toString().slice(0, 10)} --}} 12-10-2000
                        </p>
                    /
                        <p class="flex-1 ms-3 whitespace-nowrap">
                        Samsul S.pd
                        </p>
                </div>
                <img class="mt-10" src='/images/STOP_KEKERASAN.jpg' alt="" width={500} height={200} />
                <div class="w-full mt-10 h-fit flex md:w-4/6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, incidunt. Perspiciatis nesciunt quaerat molestias, ex facilis sequi optio exercitationem ullam, quo ducimus, dolore reprehenderit sunt! Necessitatibus adipisci quia quidem? Et.</p>
                </div> 
            </div>
    </div>
</x-client-layout>