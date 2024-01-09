@extends('layouts.default')

@section('content')
    @include('partials.dashboardnavbar')

    <main class="my-20 py-8 px-6">
        <div class=" container my-0 mx-auto transition-all ">
            <h1 class=" text-3xl font-bold mb-10 text-[#eb4432] transition-colors duration-200">
                My projects</h1>
            <ul class="gird grid-cols-4 gap-10">
                @forelse ($projects as $project)
                @empty
                    <li>No Projects found...</li>
                @endforelse
            </ul>
        </div>
    </main>
@endsection
