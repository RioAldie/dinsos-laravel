<x-layout>
    <div class="text-white flex  flex-col gap-5 ">
        <div class="w-full flex flex-row items-center justify-between p-6 rounded-lg border border-gray-500 bg-gray-800">
          Detail Laporan
        </div>
        <div class=" w-full border flex flex-row gap-6">
          <div class="w-full flex flex-col items-start justify-start p-6 rounded-lg border border-gray-200 gap-6 bg-gray-50 ">
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
              <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Pelapor
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['nama_pelapor'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Nomor Telephone
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['phone'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                NIK
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['NIK'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Umur pelapor
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['umur_pelapor'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Alamat pelapor
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['alamat'] }}
              </p>
            </div>
          
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Pekerjaan pelapor
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['pekerjaan'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Hubungan
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['hubungan'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Laporan dibuat
              </p>
               <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['created_at'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Nama Terlapor
              </p>
               <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['nama_terlapor'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Umur Terlapor
              </p>
               <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['umur_terlapor'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Status Laporan
              </p>
              <p class=" text-yellow-500 border-gray-200 border-b-2 w-full ">
                {{ $report['status'] }}
              </p>
            </div>  
            <div class="w-full  flex flex-row justify-start h-10 gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Judul Laporan
              </p>
              <p class="text-gray-800 border-b-2 w-full border-gray-200 ">
                {{ $report['judul'] }}
              </p>
            </div>
            <div class="w-full  flex flex-row justify-start  gap-16">
                <p class=" text-gray-800 w-56 border-b-2 border-gray-200 font-bold">
                Isi Laporan
              </p>
              <p class=" border-b-2 text-gray-800 border-gray-200 w-full h-fit p-2">
                {{ $report['isi'] }}
              </p>
            </div>
          </div>
          <div class="w-2/6 flex flex-col items-start justify-start  h-fit gap-3">
            <div class="flex w-full flex-col items-start justify-start p-6 rounded-lg border border-gray-500 bg-gray-800 h-fit gap-3">
              <form action="{{ route('report.update', $report->id) }}" method="post">
              @csrf
                <button
                  type="submit"
                  name="new_status"
                  value="Laporan Diterima"
                  class="text-black bg-green-400 w-56 hover:bg-green-500 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-green-900">
                  Terima Laporan
                </button>
              </form>
              <form action="{{ route('report.update', $report->id) }}" method="post">
                @csrf
                <button
                type="submit"
                name="new_status"
                value="Pelapor Dihubungi"
                  class="text-white bg-yellow-600 w-56 hover:bg-yellow-700 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                  Hubungi Pelapor
                </button>
              </form>
              <form action="{{ route('report.update', $report->id) }}" method="post">
                @csrf
                <button
                type="submit"
                name="new_status"
                value="Dalam Pendampingan"
                  class="text-white bg-blue-700 w-56 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Dampingi Pelapor
                </button>
              </form>
              <form action="{{ route('report.update', $report->id) }}" method="post">
                @csrf
                <button
                type="submit"
                name="new_status"
                value="Laporan Selesai"
                  class="text-white bg-green-700 w-56 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                  Laporan Selesai
                </button>
              </form>
              <form action="{{ route('report.update', $report->id) }}" method="post">
                @csrf
                <button
                type="submit"
                name="new_status"
                value="Laporan Ditolak"
                  class="text-white bg-red-700 w-56 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                  Tolak Laporan
                </button>
              </form>
            </div>
            <div class=" w-full flex flex-col items-start justify-start p-6 rounded-lg border border-gray-500 bg-gray-800 h-fit gap-3">
              <a
                >
                <button
                  type="button"
                  class="text-white w-64 bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex gap-2 items-center me-2 mb-2">
                
                  Hubungi Lewat Whatsapp
                </button>
              </a>
              <a>
                <button
                  type="button"
                  class="text-white w-64 bg-orange-600 hover:bg-orange-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex gap-2 items-center me-2 mb-2">
                
                  Hubungi Lewat Email
                </button>
              </a>
            </div>
          </div>
        </div>
    </div>
</x-layout>