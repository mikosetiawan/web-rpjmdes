   <!-- Sidebar -->
   <div class="w-64 gradient-bg text-white shadow-xl">
       <div class="p-6">
           <div class="flex items-center space-x-3">
               <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                   {{-- <i class="fas fa-building text-2xl"></i> --}}
                   <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
               </div>
               {{-- <div>
                   <h1 class="text-xl font-bold">Desa Wanakarta</h1>
                   <p class="text-sm opacity-80">Pemerintahan Desa</p>
               </div> --}}
           </div>
       </div>

       <nav class="px-4 pb-4">
           <ul class="space-y-2">
               <li>
                   <a href="{{ route('dashboard') }}"
                       class="sidebar-item {{ request()->routeIs('dashboard') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-tachometer-alt"></i>
                       <span>Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('bidang.index') }}"
                       class="sidebar-item {{ request()->routeIs('bidang.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-folder"></i>
                       <span>Bidang</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('sub-bidang.index') }}"
                       class="sidebar-item {{ request()->routeIs('sub-bidang.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-folder-open"></i>
                       <span>Sub Bidang</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('jenis-kegiatan.index') }}"
                       class="sidebar-item {{ request()->routeIs('jenis-kegiatan.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-list"></i>
                       <span>Jenis Kegiatan</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('waktu-pelaksanaan.index') }}"
                       class="sidebar-item {{ request()->routeIs('waktu-pelaksanaan.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-calendar"></i>
                       <span>Waktu Pelaksanaan</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('pola-pelaksanaan.index') }}"
                       class="sidebar-item {{ request()->routeIs('pola-pelaksanaan.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-sitemap"></i>
                       <span>Pola Pelaksanaan</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('laporan.index') }}"
                       class="sidebar-item {{ request()->routeIs('laporan.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-chart-bar"></i>
                       <span>Laporan</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('profile.edit') }}"
                       class="sidebar-item {{ request()->routeIs('profile.*') ? 'active-sidebar' : '' }} flex items-center space-x-3 px-4 py-3 text-white hover:text-yellow-300">
                       <i class="fas fa-user-cog"></i>
                       <span>Profil</span>
                   </a>
               </li>
           </ul>

           <div class="mt-8 pt-4 border-t border-white border-opacity-20">
               <form method="POST" action="{{ route('logout') }}">
                   @csrf
                   <button type="submit"
                       class="sidebar-item flex items-center space-x-3 px-4 py-3 text-white hover:text-red-300 w-full text-left">
                       <i class="fas fa-sign-out-alt"></i>
                       <span>Keluar</span>
                   </button>
               </form>
           </div>
       </nav>
   </div>
