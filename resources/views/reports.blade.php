<x-layout>

    <div class="p-2 w-full flex border-2 border-gray-200 justify-between items-center rounded-md">
        <p class="text-xl font-bold text-gray-700">Laporan</p>
        <button type="button" class="focus:outline-none text-white bg-pink-600 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-900">Tambah</button>
    </div>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Pelapor
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Isi
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 e border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $report['nama_pelapor'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $report['judul'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $report['created_at']->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $report['alamat'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Str::limit($report['isi'], 50) }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/reports/{{  $report['id'] }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">View</a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
            @endforeach
           
          
        </tbody>
    </table>
</div>

</x-layout>