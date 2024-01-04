@extends('layout.main')

@section('content')
<div class="container mx-auto px-2">

    <div class="mt-6">
        <div class="flex justify-center ">
            <div>

                <button class="bg-blue-600 lg:p-4 p-3 text-white lg:font-semibold	 rounded-md k ml-2">تسجيل دخول
                </button>
                <button class="bg-blue-600 lg:p-4 p-3 text-white lg:font-semibold	 rounded-md mr-2">حساب جديد </button>
            </div>
        </div>
        <div class="flex justify-center ">

            <button class="mt-3 bg-blue-600 lg:p-4 p-3 text-white lg:font-semibold rounded-md mr-2">امتحان تجريبي مجاني
            </button>
        </div>
    </div>
    <div class="mt-6">

        @include('pages.home.ourOffers')
    </div>
    <div div class="my-4">

        @include('pages.home.offers')
    </div>
    <div>
        @include('pages.home.informationSection')
    </div>
    <div class="my-4">
        @include('pages.home.ourServices')
    </div>
    <div class="my-4">
        @include('pages.home.ourWebSites')
    </div>
    <div class="my-4">
        @include('pages.home.books')
    </div>
</div>
</div>
@endsection