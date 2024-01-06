@extends('layout.main')

@section('content')

<!-- component -->
<div class="bg-main" style="background-size: contain;  background-repeat: no-repeat; background-image: url('{{asset('assets/login.png')}}')">
<div class="bg-color">

    <div class="container mx-auto ">
        
<div class="flex items-center justify-left h-screen flexable">
    <div class="lg:mr-8 p-8 rounded-lg  max-w-sm w-full">
        <div class="lg:flex hidden justify-center mb-2">
            <span class="inline-block rounded-full ">
                <img class=" object-cover lg:w-[180px] md:w-[130px] sm:w-[120px]  w-[120px]" src="https://admin.aspiratieskoeriers.nl/admin/files/images/setting/66bff6b50610094ec3e10c83a662dd5e78222b1copp_1eec415e7d049ada2003fd3a2882a59b479c3585white-logo.png" alt="">
            </span>
        </div>
        <h2 class="lg:text-3xl text-2xl font-semibold text-center mb-12">تسجيل الدخول</h2>
        <form>
            <div class="mb-4">
                <input type="text" class=" bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل الاسم" >
            </div>
            <div class="mb-4">
                <input type="email" class=" bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل البريد الالكتروني" >
            </div>
            <div class="mb-4">
                <input type="password" class=" bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required  placeholder="ادخل كلمة المرور " >
            </div>
           
            <div class="">
                <input type="password" id="password" class=" bg-white w-full lg:px-4 px-3 lg:py-3 py-2 border rounded-xl text-gray-700 " required placeholder="ادخل تأكيد كلمة المرور" >
            </div>
            <div class="w-8/12 mx-auto">
                <button type="submit" class="w-full mt-12  bg-blue-600 text-white lg:px-3 px-2 lg:py-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">انشاء الحساب </button>
                
            </div>
        </form>
    </div>
</div>
</div>

</div>
</div>
@endsection

@section('css')
<style>
    
    .flexable{
        @media (max-width:1030px){    
            justify-content:center !important;
        }  
    }
    
    .bg-main{
        @media (max-width:1030px){

          
            background-size: cover !important;

        } 
    }
    .bg-color{
        @media (max-width:1030px){
            background-color: rgba(255,255,255,.6) !important;
        }

    }
  
</style>
@endsection