{{-- <nav class="bg-[#63B578] w-full py-3 flex">
    <div class="flex md:w-2/5 lg:w-1/3 font-nav ml-2 sm:ml-3 md:ml-10 lg:ml-12 xl:ml-16 mr-2">
        <img class="w-[70px]" src="../assets/logo-fix.png" />
        <div class="">
            <h1 class="text-2xl font-semibold">Early Warning System</h1>
            <p class="text-lg font-medium">Tanah Longsor</p>
        </div>
    </div>
    <!--      Khusus navigasi-->
    <div class="md:w-3/5 lg:w-2/3 my-auto ml-auto">
        <div class="block md:hidden bg-[#F6F4EB] px-2 py-2 ml-auto mr-5 h-fit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5" fill="#000">
                <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
            </svg>
        </div>
        <div class="hidden md:block">
            <div class="flex justify-evenly">
                <a class="{{ $title === "Home" ? 'active' : '' }}" href="home">
                    <p
                        class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Beranda
                    </p>
                </a>
                <a class="{{ $title === "Monitoring" ? 'active' : '' }}" href="monitoring">
                    <p
                        class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Monitoring
                    </p>
                </a>
                <a class="{{ $title === "Mitigasi" ? 'active' : '' }}" href="mitigasi">
                    <p
                        class="text-sm font-semibold lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Langkah Mitigasi
                    </p>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #60B578">
    <div class="container" style="margin-left: 3%">
        <a class="navbar-brand" style="margin: 0.5%" href="home">
            <img src="{{ asset('images/logo-fix.png') }}" alt="Logo" width="60" height="60">
            <a class="navbar-brand" style="color: black" href="home">
                <span style="font-size: 24px; font-weight: 500;">Early Warning System</span> <br>
                <span style="font-size: 18px; font-weight: 500;">Tanah Longsor</span>
            </a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 10%">
            <ul class="navbar-nav column-gap-3" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Monitoring" ? 'active' : '' }}" href="monitoring">Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Mitigasi" ? 'active' : '' }}" href="mitigasi">Langkah Mitigasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Peta Pesebaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
