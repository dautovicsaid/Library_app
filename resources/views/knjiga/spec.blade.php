@extends('layouts.layout')
@section('content')
<section class="w-screen h-screen pl-[80px] pb-2 text-gray-700">
           
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[1px] border-[#e4dfdf]">
                    <div class="py-[10px] flex flex-row">
                        <div class="w-[77px] pl-[30px]">
                            <img src="img/tomsojer.jpg" alt="">
                        </div>
                        <div class="pl-[15px]  flex flex-col">
                            <div>
                                <h1>
                                    {{$knjiga->Naslov}}
                                </h1>
                            </div>
                            <div>
                                <nav class="w-full rounded">
                                    <ol class="flex list-reset">
                                        <li>
                                            <a href="{{route('knjiga.index')}}" class="text-[#2196f3] hover:text-blue-600">
                                                Evidencija knjiga
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="knjigaOsnovniDetalji.php"
                                                class="text-[#2196f3] hover:text-blue-600">
                                                KNJIGA-{{$knjiga->id}}
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[24px] mr-[30px]">
                        <a href="{{route('knjiga.otpisivanje',$knjiga->id)}}" class="inline hover:text-blue-600">
                            <i class="fas fa-level-up-alt mr-[3px]"></i>
                            Otpisi knjigu
                        </a>
                        <a href="{{route('knjiga.izdavanje',$knjiga->id)}}"  class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                            <i class="far fa-hand-scissors mr-[3px]"></i>
                            Izdaj knjigu
                        </a>
                        <a href="{{route('knjiga.vracanje',$knjiga->id)}}" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-redo-alt mr-[3px] "></i>
                            Vrati knjigu
                        </a>
                        <a href="{{route('knjiga.rezervacija',$knjiga->id)}}" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="far fa-calendar-check mr-[3px] "></i>
                            Rezervisi knjigu
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-[#e4dfdf] dotsKnjigaSpecifikacija hover:text-[#606FC7]">
                            <i
                                class="fas fa-ellipsis-v"></i>
                        </p>
                        <div
                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-knjiga-specifikacija">
                            <div class="absolute right-0 w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="{{route('knjiga.edit',$knjiga->id)}}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izmijeni knjigu</span>
                                    </a>
                                    <a href="{{route('knjiga.destroy',$knjiga->id)}}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izbriši knjigu</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row overflow-auto height-osnovniDetalji">
                <div class="w-[80%]">
                    <div class="border-b-[1px] py-4 text-gray-500 border-[#e4dfdf] pl-[30px]">
                        <a href="{{route('knjiga.show',$knjiga->id)}}" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="{{route('knjiga.spec',$knjiga)}}" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Specifikacija
                        </a>
                        <a href="iznajmljivanjeIzdate.php" class="inline ml-[70px] hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="evidencijaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="">
                        <!-- Space for content -->
                        <div class="pl-[30px] section- mt-[20px]">
                            <div class="flex flex-row justify-between">
                                <div class="mr-[30px]">
                                    <div class="mt-[20px]">
                                        <span class="text-gray-500 text-[14px]">Broj strana</span>
                                        <p class="font-medium">{{$knjiga->BrojStrana}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Pismo</span>
                                        <p class="font-medium">{{$knjiga->pismo->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Jezik</span>
                                        <p class="font-medium">{{$knjiga->jezik->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Povez</span>
                                        <p class="font-medium">{{$knjiga->povez->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Format</span>
                                        <p class="font-medium">{{$knjiga->format->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">International Standard Book Number
                                            (ISBN)</span>
                                        <p class="font-medium">{{$knjiga->ISBN}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-w-[20%] border-l-[1px] border-[#e4dfdf] ">
                    <div class="border-b-[1px] border-[#e4dfdf]">
                        <div class="ml-[30px] mr-[70px] mt-[20px] flex flex-row justify-between">
                            <div class="text-gray-500 ">
                                <p>Na raspolaganju:</p>
                                <p class="mt-[20px]">Rezervisano:</p>
                                <p class="mt-[20px]">Izdato:</p>
                                <p class="mt-[20px]">U prekoracenju:</p>
                                <p class="mt-[20px]">Ukupna kolicina:</p>
                            </div>
                            <div class="text-center pb-[30px]">
                                <p class=" bg-green-200 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">5
                                    primjeraka</p>
                                <a href="iznajmljivanjeAktivne.php"><p
                                    class=" mt-[16px] bg-yellow-200 text-yellow-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    2 primjerka</p></a>
                                    <a href="iznajmljivanjeIzdate.php"><p
                                    class=" mt-[16px] bg-blue-200 text-blue-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    102 primjerka</p></a>
                                    <a href="iznajmljivanjePrekoracenje.php"> <p
                                    class=" mt-[16px] bg-red-200 text-red-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    2 primjerka</p></a>
                                <p
                                    class=" mt-[16px] border-[1px] border-green-700 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    15 primjeraka</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[40px] mx-[30px]">
                        <div class="flex flex-col max-w-[304px]">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px] flex flex-col max-w-[304px]">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px] flex flex-col max-w-[304px]">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px]">
                            <a href="dashboardAktivnost.php?knjiga=Tom Sojer"
                                class="text-[#2196f3] hover:text-blue-600">
                                <i class="fas fa-history"></i> Prikazi sve
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>   
@endsection