@extends('layouts.layout')
@section('content')

<!-- Content -->
<section class="w-screen h-screen pl-[80px] pb-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] py-[10px] flex flex-col">
                        <div>
                            <h1 class="">
                                Izmijeni podatke
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="{{route('bibliotekar.index')}}" class="text-[#2196f3] hover:text-blue-600">
                                            Svi bibliotekari
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="{{route('bibliotekar.edit',$b->id)}}" class="text-gray-400 hover:text-blue-600">
                                            Izmijeni podatke
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <form action="{{route('bibliotekar.update',$b->id)}}" method="post" class="text-gray-700 text-[14px] forma" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[100px]">
                            <div class="mt-[20px]">
                                <span>Ime i prezime <span class="text-red-500">*</span></span>
                                <input type="text" name="imePrezimeBibliotekarEdit" id="imePrezimeBibliotekarEdit" value="{{$b->ImePrezime}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsNameBibliotekarEdit()"/>
                                <div class="fail" id="validateNameBibliotekarEdit">@error('imePrezimeBibliotekarEdit') Ime i prezime bibliotekara je obavezno polje @enderror</div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Tip korisnika</span>
                                <select class="flex w-[90%] mt-2 px-2 py-2 border bg-gray-300 border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="tip_korisnika" >
                                <!--@foreach($tip as $t)
                                    <option value="{{$t->id}}">
                                     {{$t->Naziv}}  
                                    </option>
                                   @endforeach-->

                                   <option value="1"> 
                                        bibliotekar
                                    </option>

                                </select>
                            </div>

                            <div class="mt-[20px]">
                                <span>JMBG <span class="text-red-500">*</span></span>
                                <input type="text" name="jmbgBibliotekarEdit" id="jmbgBibliotekarEdit" value="{{$b->JMBG}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsJmbgBibliotekarEdit()"/>
                                <div class="fail" id="validateJmbgBibliotekarEdit">@error('jmbgBibliotekarEdit') JMBG bibliotekara je obavezno polje @enderror</div>
                            </div>

                            <div class="mt-[20px]">
                                <span>E-mail <span class="text-red-500">*</span></span>
                                <input type="email" name="emailBibliotekarEdit" id="emailBibliotekarEdit" value="{{$b->email}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsEmailBibliotekarEdit()"/>
                                <div class="fail" id="validateEmailBibliotekarEdit">@error('emailBibliotekarEdit') Email bibliotekara je obavezno polje @enderror</div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Korisnicko ime <span class="text-red-500">*</span></span>
                                <input type="text" name="usernameBibliotekarEdit" id="usernameBibliotekarEdit" value="{{$b->name}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsUsernameBibliotekarEdit()"/>
                                <div class="fail" id="validateUsernameBibliotekarEdit">@error('usernameBibliotekarEdit') Username bibliotekara je obavezno polje @enderror</div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Sifra <span class="text-red-500">*</span></span>
                                <input type="password" name="pwBibliotekarEdit" id="pwBibliotekarEdit" value="{{$b->password}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsPwBibliotekarEdit()"/>
                                <div class="fail" id="validatePwBibliotekarEdit"> @error('pwBibliotekarEdit') Sifra bibliotekara je obavezno polje @enderror </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Ponovi šifru <span class="text-red-500">*</span></span>
                                <input type="password" name="pw2BibliotekarEdit" id="pw2BibliotekarEdit" value="{{$b->password}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsPw2BibliotekarEdit()"/>
                                <div class="fail" id="validatePw2BibliotekarEdit">@error('pw2BibliotekarEdit') Sifra bibliotekara je obavezno polje @enderror</div>
                            </div>
                        </div>

                        <div class="mt-[50px]">
                            <label class="mt-6 cursor-pointer">
                                <div id="empty-cover-art" class="relative w-48 h-48 py-[48px] text-center border-2 border-gray-300 border-solid">
                                    <div class="py-4">
                                        <svg class="mx-auto feather feather-image mb-[15px]" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                        <span class="px-4 py-2 mt-2 leading-normal">Add photo</span>
                                        <input type='file' class="hidden" :accept="accept" name="foto" onchange="loadFileLibrarian(event)" />
                                    </div>
                                    <img src="@if($b->Foto){{ asset('/storage' . $b->Foto) }}@else /img/defaultusericon.jpg @endif" alt="" class="absolute w-48 h-[188px] bottom-0" />	
                                </div>
                            </label>  
                        </div>
                    </div>

                    <div class="absolute bottom-0 w-full">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-right py-[7px] mr-[100px] text-white">
                                <button type="button"
                                        class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                                        <a href="{{route('bibliotekar.index')}}" >Poništi <i class="fas fa-times ml-[4px]"></i> </a> 
                                </button>
                                <button id="sacuvajBibliotekaraEdit" type="submit"
                                        class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]" >
                                            Sačuvaj <i class="fas fa-check ml-[4px]"></i> 
                                </button>
                            </div>
                        </div>        
                    </div>
                    
                </form>
            </div>
        </section>
        @endsection