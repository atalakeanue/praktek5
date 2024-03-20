@extends('layout.main')
@section('content')
<div class="flex flex-wrap mt-6 -mx-3">
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <p class="pt-2 mb-1 font-semibold">My Biodata!</p>
                      <h5 class="font-bold">Atala Keanue Djibran</h5>
                      <p class="mb-12">Saya seorang mahasiswa dari program studi sistem informasi di universitas tanjungpura. Keseharian saya suka bermain game online dan menonton anime.
                      <a href="https://github.com/atalakeanue" class="font-bold">Click disini untuk menuju Github saya</a>
                      </p>
                      <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                        Read More
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                    <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                      <img src="./assets/img/profil-biodata-user.jpg" class="absolute top-0 hidden w-2/5 h-full lg:block" alt="profil" />
                      <div class="relative flex items-center justify-center h-full">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection