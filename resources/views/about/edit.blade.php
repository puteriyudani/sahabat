@extends('layout.admin')

@section('title')
    <title>About - Admin</title>
    <style>
        .relative:hover form {
            opacity: 1;
        }
    </style>
@endsection

@section('desktop-sidebar')
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
                Sahabat
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('galery.index') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                            </path>
                        </svg>
                        <span class="ml-4">Galery</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                        href="{{ route('about.index') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z">
                            </path>
                        </svg>
                        <span class="ml-4">About</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('mobile-sidebar')
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
                Sahabat
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('galery.index') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                            </path>
                        </svg>
                        <span class="ml-4">Galery</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                        href="{{ route('about.index') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z">
                            </path>
                        </svg>
                        <span class="ml-4">About</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('main')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                About
            </h2>

            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- General elements -->
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="siswa_id_display" class="form-label">User ID</label>
                            <input type="text" name="user_id" id="user_id" value="{{ $about->user_id }}"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="User ID" />
                        </div>
                    </fieldset>

                    <input type="hidden" name="user_id" value="{{ $about->user_id }}">

                    @error('user_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Foto</span>
                        <input name="image[]" id="image" type="file"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Foto" />
                        @if ($about->image)
                            <div class="mt-2">
                                <p class="text-sm text-gray-600">Current Image:</p>
                                <img src="{{ asset('storage/images/' . $about->image) }}" alt="Current Image"
                                    class="mt-2 max-w-xs" style="max-width: 200px">
                            </div>
                        @endif
                    </label>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Nama</span>
                        <input type="text" name="nama" id="nama" value="{{ $about->nama }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Nama" />
                    </label>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Pengantar</span>
                        <input type="text" name="pengantar" id="pengantar" value="{{ $about->pengantar }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Pengantar" />
                    </label>
                    @error('pengantar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tanggal Lahir</span>
                        <input type="text" name="tgl_lahir" id="tgl_lahir" value="{{ $about->tgl_lahir }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Tanggal Lahir" />
                    </label>
                    @error('tgl_lahir')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tempat Lahir</span>
                        <input type="text" name="tpt_lahir" id="tpt_lahir" value="{{ $about->tpt_lahir }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Tempat Lahir" />
                    </label>
                    @error('tpt_lahir')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Umur</span>
                        <input type="text" name="umur" id="umur" value="{{ $about->umur }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Umur" />
                    </label>
                    @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Pendidikan</span>
                        <input type="text" name="pendidikan" id="pendidikan" value="{{ $about->pendidikan }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Pendidikan" />
                    </label>
                    @error('pendidikan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">No HP</span>
                        <input type="text" name="nohp" id="nohp" value="{{ $about->nohp }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="No HP" />
                    </label>
                    @error('nohp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input type="text" name="email" id="email" value="{{ $about->email }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Email" />
                    </label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Kota</span>
                        <input type="text" name="kota" id="kota" value="{{ $about->kota }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Kota" />
                    </label>
                    @error('kota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Pekerjaan</span>
                        <input type="text" name="pekerjaan" id="pekerjaan" value="{{ $about->pekerjaan }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Pekerjaan" />
                    </label>
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tentang</span>
                        <textarea name="tentang" id="tentang"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3" placeholder="Enter some long form content.">{{ $about->tentang }}</textarea>
                    </label>
                    @error('tentang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Twitter</span>
                        <input type="text" name="twitter" id="twitter" value="{{ $about->twitter }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Twitter" />
                    </label>
                    @error('twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Instagram</span>
                        <input type="text" name="instagram" id="instagram" value="{{ $about->instagram }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Instagram" />
                    </label>
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Facebook</span>
                        <input type="text" name="facebook" id="facebook" value="{{ $about->facebook }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Facebook" />
                    </label>
                    @error('facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tiktok</span>
                        <input type="text" name="tiktok" id="tiktok" value="{{ $about->tiktok }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Tiktok" />
                    </label>
                    @error('tiktok')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mt-4">
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
