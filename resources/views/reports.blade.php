<x-layout>

    <div class="p-2 w-full flex border-2 border-gray-200 justify-between items-center rounded-md">
        <p class="text-xl font-bold text-gray-700">Laporan</p>
        <a href="{{ route('report.add') }}">
        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Tambah</button></a>
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
                    Status
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
                    <td class="px-2 w-36 py-4 font-bold 
                        {{ $report['status'] == 'Laporan Ditolak' ? 'text-red-700' : 
                        ($report['status'] == 'Dalam Tinjauan' ? 'text-yellow-400' : 'text-green-700') }}">
                        {{ $report['status'] }}
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2">
                        <a href="/reports/{{  $report['id'] }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Lihat</a>
                        
                        <form method="post" action="{{  route('report.delete',$report->id) }}">
                            @csrf
                            <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           
          
        </tbody>
    </table>
</div>

</x-layout>