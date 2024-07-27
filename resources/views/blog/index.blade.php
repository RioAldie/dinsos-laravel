
<x-layout>

    <div class="p-2 w-full flex border-2 border-gray-200 justify-between items-center rounded-md">
        <p class="text-xl font-bold text-gray-700">Berita</p>
        <a href="{{ route('blog.create') }}">
        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  ">Tambah</button></a>
    </div>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul 
                </th>
                <th scope="col" class="px-6 py-3">
                    Penulis
                </th>
                <th scope="col" class="px-6 py-3">
                    Created_At
                </th>
                <th scope="col" class="px-6 py-3">
                    Photo
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $post)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 e border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post['judul'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post['author'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post['created_at']->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4">
                        @if($post->image_path)
                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="post Image" style="max-width: 100%;" class="w-20 h-20">
                    @endif
                    </td>
                    
                    <td class="px-6 py-4 flex flex-row gap-2">
                        <a href="{{ route('blog.edit', $post->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Edit</a>
                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                                Hapus
                            </button>
                        </form>
                    </td>
                  
                </tr>
            @endforeach
           
          
        </tbody>
    </table>
</div>

</x-layout>