<x-client-layout>
    <div class="text-white w-full border items-center justify-center flex flex-col gap-5 p-2">
        <div class="w-4/6 flex flex-row mt-20 items-center text-center justify-between p-6 rounded-lg border border-gray-500 bg-primary">
          <p class="font-medium text-center w-full">Lengkapi Laporanmu</p>
        </div>
        <form action="{{ route('report.submit') }}" method="post" class=" w-full max-w-md  p-4 rounded-md border-gray-300 border bg-gray-50">
            @csrf
            <!-- NIK -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="text"
                name="NIK"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
            />
            <label for="NIK" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                NIK
            </label>
            </div>
        
            <!-- Nama Pelapor -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="text"
                name="nama_pelapor"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
            />
            <label for="nama_pelapor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Nama Pelapor
            </label>
            </div>
        
            <!-- Umur Pelapor -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="number"
                name="umur_pelapor"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
            />
            <label for="umur_pelapor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Umur Pelapor
            </label>
            </div>
        
            <!-- Pekerjaan -->
            <div class="relative z-0 w-full mb-5 group">
                <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan Anda</label>
                <select id="pekerjaan" name="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>Pegawai</option>
                  <option>Wiraswasta</option>
                  <option>Wirausaha</option>
                  <option>Belum Bekerja</option>
                  <option>Pelajar</option>
                  <option>Lainnya</option>
                </select>
            </div>
        
            <!-- Alamat -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="text"
                name="alamat"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
            />
            <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Alamat
            </label>
            </div>
        
            <!-- Judul -->
            <div class="relative z-0 w-full mb-5 group">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Tema Laporanmu</label>
                <select id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              
                  <option>Kekerasan Fisik</option>
                  <option>Serangan Psikis/Mental</option>
                  <option>Kekerasan Seksual</option>
                  <option>Penelantaran Anak</option>
                  <option>Pembullyan</option>
                  <option>Lainnya</option>
                </select>
            </div>
        
            <!-- Isi -->
            <div class="relative z-0 w-full mb-5 group">
            <label for="isi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Laporan</label>
            <textarea id="isi" name="isi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" ></textarea>
            </div>
        
            <!-- Nama Terlapor -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="text"
                name="nama_terlapor"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
            />
            <label for="nama_terlapor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Nama Terlapor
            </label>
            </div>
        
            <!-- Umur Terlapor -->
            <div class="relative z-0 w-full mb-5 group">
            <input
                type="number"
                name="umur_terlapor"
                class="block py-2.5 px-0 w-full
                text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
                />
                <label for="umur_terlapor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Umur Terlapor
                </label>
            </div>

            <!-- Hubungan -->
            <div class="relative z-0 w-full mb-5 group">
                <input
                type="text"
                name="hubungan"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
                />
                <label for="hubungan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Hubungan
                </label>
            </div>

            <!-- Phone -->
            <div class="relative z-0 w-full mb-5 group">
                <input
                type="text"
                name="phone"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
                />
                <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Nomor Telepon
                </label>
            </div>

            <!-- Email -->
            <div class="relative z-0 w-full mb-5 group">
                <input
                type="email"
                name="email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                placeholder=" "
                required
                />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Email
                </label>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                Kirim Laporan
            </button>
        </form>
        <div id="toast" class="absolute top-80 flex hidden items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-white bg-primary divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow " role="alert">
            <svg class="w-5 h-5 text-white rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9"/>
            </svg>
            <div class="ps-4 text-sm font-normal">Laporan Berhasil terkirim</div>
        </div>
    </div>
    <script>
        // Check if there's a session flash message
        @if(session('status'))
            document.getElementById('toast').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('toast').classList.add('hidden');
            }, 3000); // Hide after 3 seconds
        @endif
    </script>
</x-client-layout>