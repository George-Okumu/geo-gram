<x-app-layout>
    <div class="flex justify-center">
        <div class="mt-8">
            <img class="h-20 rounded-full mr-4" src="https://cdn-images-1.medium.com/fit/c/72/72/1*MotlWcSa2n6FrOx3ul89kw.png" alt="Icon" />
        </div>
        <div class="mt-4">
            <div class="w-full md:w-3/4 text-center">
                <div class="text-left pt-3">
                    <span class="text-base text-gray-700 text-2xl mr-2">{{ Auth::user()->username }}</span>
                    <span class="text-base font-semibold text-gray-700 mr-2">
                        <button class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded">Edit Profile</button>
                    </span>
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
        <div class="max-w-sm w-full lg:max-w-full lg:flex pt-4">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/storage/{{$posts-> imageUrl}}')" title="Post Image url">
            </div>
            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">{{$posts-> title}}</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>