@php
    // Define the mapping from titles to Tailwind background colors
    $titleColors = [
        'Artificial Intelligence' => 'bg-indigo-200',
        'Cybersecurity' => 'bg-red-200',
        'Data Analysis' => 'bg-yellow-200',
        'Data Science' => 'bg-blue-200',
        'Game Development' => 'bg-green-200',
        'Information System' => 'bg-teal-200',
        'Software Development' => 'bg-pink-200',
    ];
@endphp

<x-mainLayout>
    <div class="mx-auto max-w-screen-xl p-10">
        <h1 class="text-center text-2xl lg:text-3xl font-bold text-purple_template mx-5">{{ $roadmap['title'] }}</h1>
        <img src="{{ asset('img/chosen_field/'.$chosen_field.'.jpg') }}" alt="Artificial Intelligence" class="p-10 h-96 rounded-2xl w-full object-cover">
        <p class="text-lg text-center">{{ $roadmap['description'] }}</p>
        <div class="max-w-full pt-10">
            {{-- Flippable card container --}}
            <div class="flex flex-wrap gap-10 justify-center">
            @foreach ($roadmap['stages'] as $stage)
                <div class="flip-card bg-transparent w-[400px] h-[550px] rounded-xl border-slate-50 [perspective:1000px] hover:shadow-2xl transition-all hover:scale-105 duration-300" onclick="this.classList.toggle('flipped') ">
                    <div class="flip-card-inner relative w-full h-full transition-transform duration-1000 rounded-xl">
                        <div class="flip-card-front {{$titleColors[$chosen_field] ?? 'bg-gray-50'}} absolute w-full h-full flex flex-col gap-5 rounded-xl justify-center text-center items-center ">
                            <h2 class="text-4xl font-bold pb-1.5">{{ $stage['name'] }}</h2>
                            <p class="text-lg font-semibold">Click for more details!</p>
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-cyan-100 p-2 rounded-xl">
                            <h2 class="text-lg underline">{{ $stage['name'] }} - Details</h2>
                            <ul class="list-disc list-inside">
                                @foreach ($stage['skills'] as $skill)
                                    <li><strong>{{ $skill['name'] }}</strong>: {{ $skill['description'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> 
            @endforeach
            </div>
        </div>
    </div>
</x-mainLayout>

<style>
    .flip-card-inner {
        transform-style: preserve-3d;
    }

    .flip-card.flipped .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        /* background-color: #bbb;
        color: black; */
    }

    .flip-card-back {
        /* background-color: dodgerblue; */
        /* color: white; */
        transform: rotateY(180deg);
    } 
</style>
