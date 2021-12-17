@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to Group 6 Presentation
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{asset('images/me.jpeg')}} width="700" height="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Iancecil
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "Don't give up. Its all about Practicing, Making yourself ready and Efficient for anything"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am currently a Second Year Strathmore University student Pursing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/ian"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{asset('images/Farah.jpeg')}} width="700" height="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Farah Abdirahman
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "Just believe in yourself."
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am currently a Second Year Strathmore University student Pursing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/farah"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{asset('images/Mbuvi.jpeg')}}" width="700" height="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Innocent Mbuvi
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "If wishes were horses... try your best"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am Currently a second-year student at Strathmore University pursuing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/mbuvi"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{asset('images/alumada.jpeg')}} width="700" height="500" alt=""/>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Renne Alumada
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "KEEP ON TRYING AND NEVER GIVE UP BUT DONT FORCE IT"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am Currently a second-year student at Strathmore University pursuing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/alumada"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{asset('images/edu.jpeg')}} width="700" height="500" alt=""/>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Edwin Onyango
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "Just Believe"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am Currently a second-year student at Strathmore University pursuing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/edu"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{asset('images/ann.jpeg')}} width="700" height="500" alt=""/>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                My name is Ann Kigera
            </h2>

            <p class="py-8 text-gray-500 text-s italic">
                "Yes we can. Its all in your mind"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                I am Currently a second-year student at Strathmore University pursuing Bachelor of Business Information Technology (BBIT).
            </p>

            <a
                href="/portfolio/ann"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            We are experts in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Fullstack Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            DevOps Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            API Development
        </span>
    </div>

@endsection


