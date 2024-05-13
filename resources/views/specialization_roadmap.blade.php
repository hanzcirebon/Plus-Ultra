<x-mainLayout>
    <div class="mx-auto max-w-screen-xl p-10">
        <h1 class="text-center text-2xl lg:text-3xl font-bold text-purple_template mx-5">{{ $roadmap['title'] }}</h1>
        <img src="{{ asset('img/chosen_field/'.$chosen_field.'.jpg') }}" alt="Artificial Intelligence" class="p-10 h-96 rounded-2xl w-full object-cover">
        <p class="text-lg text-center">{{ $roadmap['description'] }}</p>
        <div class="flex flex-wrap gap-5">
            @foreach ($roadmap['stages'] as $stage)
                <!-- Flippable card container -->
                <div class="max-w-xl w-full">
                    <div class="flip-card" onclick="this.classList.toggle('flipped')">
                        <div class="flip-card-inner flex flex-wrap justify-center">
                            <!-- Front face of the card -->
                            <div class="flip-card-front border-4 border-opacity-50 border-black bg-purple-50 p-10 rounded-3xl">
                                <h2>{{ $stage['name'] }}</h2>
                                <p>Click for more details!</p>
                            </div>
                            <!-- Back face of the card -->
                            <div class="flip-card-back bg-purple-700 text-white p-10 rounded-3xl">
                                <h2>{{ $stage['name'] }} - Details</h2>
                                <ul class="list-disc list-inside">
                                    @foreach ($stage['skills'] as $skill)
                                        <li><strong>{{ $skill['name'] }}</strong>: {{ $skill['description'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-mainLayout>

<style>
    .flip-card {
        perspective: 1000px;
    }
    .flip-card-inner {
        transition: transform 0.6s;
        transform-style: preserve-3d;
        position: relative;
    }
    .flip-card.flipped .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        backface-visibility: hidden;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .flip-card-back {
        transform: rotateY(180deg);
        background-color: rgb(126 34 206);
    }
</style>
