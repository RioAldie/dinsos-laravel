<x-layout>

    <div class="p-2 w-full flex border-2 border-gray-200 justify-between items-center rounded-md">
        <p class="text-xl font-bold text-gray-700">Kegiatan</p>
        <a href="{{ route('event.add') }}">
        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Tambah</button></a>
    </div>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama 
                </th>
                <th scope="col" class="px-6 py-3">
                    Tempat
                </th>
                <th scope="col" class="px-6 py-3">
                    Peserta
                </th>
                <th scope="col" class="px-6 py-3">
                    Waktu
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 e border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $event['judul'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $event['lokasi'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Str::limit($event['peserta'], 50) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $event['waktu'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $event['date'] }}
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2">
                        
                        <a href="{{ route('event.edit', $event->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Edit</a>
                        <form method="post" action="{{  route('event.delete',$event->id) }}">
                            @csrf
                            <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Hapus</button>
                        </form>
                        
                    </td>
                  
                </tr>
            @endforeach
           
          
        </tbody>
    </table>
</div>

</x-layout>