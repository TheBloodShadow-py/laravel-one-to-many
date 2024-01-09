@extends('layouts.default')

@section('content')
    @include('partials.navbar')
    <div class="container my-0 mx-auto transition-all duration-300">
        <div class="flex justify-center my-16 flex-col items-center gap-12 text-white px-8">
            <img class="w-[300px] drop-shadow-md rounded-md" draggable="false" src="{{ $project->imageurl }}">
            <ul class="flex flex-col gap-6 text-base">
                <li>
                    <span class="font-bold text-[#eb4432]">Title = </span>
                    {{ $project->title }}
                </li>
                <li class="max-w-[800px]">
                    <span class="font-bold  text-[#eb4432]">Description = </span>
                    {{ $project->description }}
                </li>
                <li>
                    <span class="font-bold  text-[#eb4432]">Type = </span>
                    {{ $project->type->name }}
                </li>
                <li>
                    <span class="font-bold  text-[#eb4432]">Stars = </span>
                    {{ $project->stars }}
                </li>
            </ul>
        </div>
        <div class="flex items-center justify-center gap-10 pt-[60px]">
            <a href=""
                class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">
                Modify
            </a>
            <a href=""
                class="uppercase text-xs cursor-pointer bg-red-500 py-3 hover:bg-red-600 transition-colors duration-300 px-14 rounded font-bold text-white">
                Delete
            </a>
        </div>

    </div>
@endsection
