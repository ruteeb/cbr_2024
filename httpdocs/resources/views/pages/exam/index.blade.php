@extends('layout.main')

@section('content')
<div class="container mx-auto px-2">
    
    <div class="flex justify-center items-center">
<div class="flex items-center my-8">

    <img class="  lg:w-[180px] md:w-[130px] sm:w-[120px] h-[70px] md:h-[80px] lg:h-[100px] w-[120px]" src="https://admin.aspiratieskoeriers.nl/admin/files/images/setting/66bff6b50610094ec3e10c83a662dd5e78222b1copp_1eec415e7d049ada2003fd3a2882a59b479c3585white-logo.png" alt="">
    <div class="mr-4">
        <p class="text-2xl font-semibold ">احجز امتحانك الان</p>
        <p  class="text-lg ">سنقوم بمعالجة طلبك  فور استلامه</p>
    </div>
</div>

    </div>
<div class="flex justify-center ">
    
<form action="" class="">

    <div class="flex  gap-5 ">
        <div class="w-full">
        <label class="font-light text-xl m-2">الاسم</label>
            <input type="text" name="name" class=" mt-2 w-full bg-white  mb-3 lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الاسم" >
        </div>
        <div class="w-full">

            <label class="font-light m-2">الكنية</label>
            <input type="text" name="last_name" class=" mt-2 w-full bg-white  mb-3 lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الكنية" >
        </div>
    </div>
    <div class="mb-3">
        
        <label class="font-light text-xl m-2">رقم الهاتف</label>
        <input type="text" class="mt-2 bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل رقم الهاتف" >
    </div>
    <div class="mb-3">
        
        <label class="font-light text-xl m-2">البريد الالكتروني</label>
        <input type="email" class="mt-2 bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل البريد الالكتروني" >
    </div>
    <div class="mb-3">
        
        <label class="font-light text-xl m-2">تاريخ الميلاد</label>
        <input type="date" class="mt-2 bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الايميل" >
    </div>
    <div class="lg:flex md:flex justify-between gap-5 ">
        <div class="w-full">
            
        <label class="font-light text-xl m-2">اختر لمكان المناسب</label>
            <input type="text" class="mt-2 w-full bg-white  mb-3 lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الايميل" >
        </div>
        <div class="w-full">
            
            <label class="font-light text-xl m-2">الاسم</label>
                <input type="text" class=" mt-2 w-full bg-white  mb-3 lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الايميل" >
            </div>
            <div class="w-full">
            
                <label class="font-light text-xl m-2">الاسم</label>
                    <input type="text" class="mt-2 w-full bg-white  mb-3 lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الايميل" >
                </div>
    </div>
    <div class="mb-3">
        <label class="font-light text-xl m-2">اختر لغة المترجم</label>
        <select class="mt-2 bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " name="" id="">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>
    <div class="w-8/12 mx-auto">
        <button type="submit" class="w-full mt-6  bg-blue-600 text-white lg:px-3 px-2 lg:py-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">حجز</button>
    </div>
</form>
</div>
   
</div>
</div>
@endsection