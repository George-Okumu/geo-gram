<x-app-layout>
    <div class="flex justify-center">
        <div class="mt-8">
            <img class="h-20 rounded-lg mr-4" src="/storage/{{Auth::user()->profile->profileImage}}" alt="Icon" />
        </div>
        <div class="mt-4">
            <div class="w-full md:w-3/4 text-center">
                <div class="text-left pt-3">
                    <span class="text-bas text-gray-700 text-2xl">{{ Auth::user()->username }}</span>

                </div>
                <div class="pt-4">
                    <a href="/profile/{{Auth::user()->id}}/edit" class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded">Edit Profile</a>
                </div>

                <div class="mt-4">
                    <span class="text-base font-semibold text-gray-700">
                        <a href="/posts/create" class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded">Create Post</a>

                    </span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <span class="text-base font-semibold text-gray-700 mr-2">
                        <b>{{ Auth::user()->posts->count() }}</b> posts
                    </span>
                    <span class="text-base font-semibold text-gray-700 mr-2">
                        <b>114</b> followers
                    </span>
                    <span class="text-base font-semibold text-gray-700">
                        <b>200</b> following
                    </span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <span class="text-lg font-bold text-gray-700 mr-2">{{ Auth::user()->profile->title ?? "Not set"}}</span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <span class="text-lg font-bold text-gray-700 mr-2"><b>Description: </b>{{ Auth::user()->profile->description ?? "Not set"}}</span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <p class="text-base underline font-medium text-gray-700 mr-2"><a href="{{ Auth::user()->profile->linkUrl ?? "Link not set" }}">Portfolio</a></p>
                </div>
            </div>
        </div>
    </div>


    <div>

        @foreach(Auth::user()->posts as $posts)
        <section class="overflow-hidden text-gray-700">
            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                <div class="flex flex-wrap -m-1 md:-m-2">
                    <div class="flex flex-wrap w-1/3">
                        <div class="w-full p-1 md:p-2">
                            <a href="/posts/{{$posts->id}}">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="/storage/{{$posts->imageUrl}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    </div>
</x-app-layout>