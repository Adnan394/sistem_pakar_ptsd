<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create gejala') }}
        </h2>
    </x-slot>
    <section class="h-screen bg-gray-100 bg-opacity-50 mt-4">
        <form class="container max-w-2xl mx-auto shadow-md md:w-3/4" action="{{ route('updatepenyakit', $penyakit->id) }}"
            method="POST">
            @method('PUT')
            @csrf
            <div class="space-y-6 bg-white">
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        KODE
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" id="id_penyakit" name="kode"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                value="{{ $penyakit->kode }}" />
                        </div>
                    </div>
                </div>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        KRITERIA
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" id="jenis_penyakit" name="kriteria"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                value="{{ $penyakit->kriteria }}" />
                        </div>
                    </div>
                </div>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        DESKRIPSI
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" id="solusi" name="deskripsi"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                value="{{ $penyakit->deskripsi_penyakit }}" />
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                    <button type="submit"
                        class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Save
                    </button>
                </div>
            </div>
            {{-- @method(‘PUT’) --}}
        </form>
    </section>
    {{-- @push('scripts')
    <script>
        $(deskrip_gejala).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
    </script>
    @endpush --}}
</x-app-layout>