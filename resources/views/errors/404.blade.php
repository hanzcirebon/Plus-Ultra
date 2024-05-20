<x-mainLayout>
    <div class="max-w-full flex justify-center items-center min-h-screen">
        <div class="gap-5 border-2 border-black rounded-3xl max-w-xl p-10 m-5 bg-slate-900">
            <div class="flex flex-col">
                <div class="text-5xl font-semibold text-pink_template">
                    <span>404</span>
                </div>
                <div class="text-2xl">
                    <span>Oops, page not found</span>
                </div>
                <div class="text-xl ">
                    <a href="{{route('home')}}" class="text-purple_template hover:underline">Click Here</a>
                    <span> To go back to homepage</span>
                </div>
            </div>
        </div>
    </div>
</x-mainLayout>