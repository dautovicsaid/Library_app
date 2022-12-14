
@extends('layouts.layout')
@section('content')
<section class="w-screen h-screen pl-[80px] py-4 text-gray-700">
    <!-- Heading of content -->
    <div class="heading mt-[7px]">
        <h1 class="pl-[30px] pb-[21px] border-b-[1px] border-[#e4dfdf] ">
            Izdavanje knjiga
        </h1>
    </div>
    <!-- Space for content -->
    <div class="scroll height-dashboard">
        <div class="flex items-center px-6 py-4 space-x-3 rounded-lg ml-[292px]">
            <div class="flex items-center">
                <div class="relative text-gray-600 focus-within:text-gray-400">
                    <input type="search" name="q"
                        class="py-2 pl-2 text-sm text-white bg-white border-2 border-gray-200 rounded-md focus:outline-none focus:bg-white focus:text-gray-900 w-[600px]"
                        placeholder="Pretrazi knjige..." autocomplete="off">
                </div>
            </div>
            <a href="novaKnjiga.php"
                class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] tracking-wider text-white bg-[#3f51b5] rounded hover:bg-[#4558BE]">Pretrazi
            </a>
        </div>
        <div>
            <!-- Space for content -->
            <div class="flex justify-start pt-3 bg-white">
                <div class="mt-[10px]">
                    <ul class="text-[#2D3B48]">
                        <li class="mb-[4px]">
                            <div class="w-[300px] pl-[32px]">
                                <span
                                    class=" whitespace-nowrap w-full text-[25px]  flex justify-between fill-current">
                                    <div
                                        class="py-[15px] px-[20px] w-[268px] cursor-pointer @if(Route::currentRouteName()=='evidencija.index') text-[#576cdf] bg-[#EFF3F6] @endif rounded-[10px]">
                                        <a href="{{route('evidencija.index')}}" aria-label="Sve knjige"
                                            class="flex items-center">
                                            <i
                                                class="transition duration-300 ease-in group-hover:text-[#576cdf]  far fa-copy text-[20px]"></i>
                                            <div>
                                                <p
                                                    class="transition duration-300 ease-in group-hover:text-[#576cdf]text-[15px] ml-[18px]">
                                                    Izdate knjige</p>
                                            </div>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </li>
                        <li class="mb-[4px]">
                            <div class="w-[300px] pl-[32px]">
                                <span
                                    class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                    <div
                                        class="group hover:bg-[#EFF3F6] py-[15px] @if(Route::currentRouteName()=='evidencija.vracene') text-[#576cdf] bg-[#EFF3F6] @endif px-[20px] w-[268px] rounded-[10px] cursor-pointer">
                                        <a href="{{route('evidencija.vracene')}}" aria-label="Izdate knjige"
                                            class="flex items-center">
                                            <i
                                                class=" text-[20px] fas fa-file transition duration-300 ease-in group-hover:text-[#576cdf]"></i>
                                            <div>
                                                <p
                                                    class="text-[15px] ml-[21px] transition duration-300 ease-in group-hover:text-[#576cdf]">
                                                    Vracene knjige</p>
                                            </div>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </li>
                        <li class="mb-[4px]">
                            <div class="w-[300px] pl-[28px]">
                                <span
                                    class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                    <div
                                        class="group hover:bg-[#EFF3F6] py-[15px] px-[20px] w-[268px] @if(Route::currentRouteName()=='evidencija.prekoracene')text-[#576cdf] bg-[#EFF3F6] @endif rounded-[10px] cursor-pointer">
                                        <a href="{{route('evidencija.prekoracene')}}" aria-label="Knjige na raspolaganju"
                                            class="flex items-center">
                                            <i
                                                class="text-[20px] fas fa-exclamation-triangle transition duration-300 ease-in group-hover:text-[#576cdf]"></i>
                                            <div>
                                                <p
                                                    class="text-[15px] ml-[17px] transition duration-300 ease-in group-hover:text-[#576cdf]">
                                                    Knjige u prekoracenju</p>
                                            </div>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </li>
                        <li class="mb-[4px]">
                            <div class="w-[300px] w-[300px] border-t-[1px] border-[#e4dfdf]">
                                <span
                                    class=" pl-[32px] whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                    <div
                                        class="group hover:bg-[#EFF3F6] py-[15px] px-[20px] w-[268px] rounded-[10px] @if(Route::currentRouteName()=='evidencija.aktivne')text-[#576cdf] bg-[#EFF3F6] @endif cursor-pointer">
                                        <a href="{{route('evidencija.aktivne')}}" aria-label="Rezervacije"
                                            class="flex items-center">
                                            <i
                                                class=" text-[20px] far fa-calendar-check transition duration-300 ease-in group-hover:text-[#576cdf]"></i>
                                            <div>
                                                <p
                                                    class="text-[15px] ml-[19px] transition duration-300 ease-in group-hover:text-[#576cdf]">
                                                    Aktivne rezervacije</p>
                                            </div>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </li>
                        <li class="mb-[4px]">
                            <div class="w-[300px] pl-[32px]">
                                <span
                                    class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                    <div
                                        class="group hover:bg-[#EFF3F6] py-[15px] px-[20px] w-[268px] rounded-[10px] @if(Route::currentRouteName()=='evidencija.arhivirane') text-[#576cdf] bg-[#EFF3F6] @endif cursor-pointer">
                                        <a href="{{route('evidencija.arhivirane')}}" aria-label="Rezervacije"
                                            class="flex items-center">
                                            <i
                                                class=" text-[20px] fas fa-calendar-alt transition duration-300 ease-in group-hover:text-[#576cdf]"></i>
                                            <div>
                                                <p
                                                    class="text-[15px] ml-[19px] transition duration-300 ease-in group-hover:text-[#576cdf]">
                                                    Arhivirane rezervacije</p>
                                            </div>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--izdate-->
                @include('evidencija.izdate')

               

                <!--vracene-->
                @include('evidencija.vracene')
                
                <!--prekoracenje-->
                @include('evidencija.prekoracenje')
               

    <!--aktivna rezervacija -->

    @include('evidencija.aktivna')

    <!--arhivirana-->

    @include('evidencija.arhivirana')
        </div>
    </div>

</section>

@endsection