<x-app-layout>
    <div class="flex justify-center">
        <div class="mt-8">
            <img class="h-20 rounded-lg mr-4" src="{{Auth::user()->profile->profileImage()}}" alt="Icon" />
        </div>
        <div class="mt-4">
            <div class="w-full md:w-3/4 text-center">
                <div class="pt-3">
                    <span class="text-base text-gray-700 text-2xl">{{ Auth::user()->username }}</span>
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
                    <span class="text-lg font-bold text-gray-700 mr-2">{{ Auth::user()->profile->title ?? "N/A" }}</span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <span class="text-lg font-bold text-gray-700 mr-2"><b>Description: </b>{{ Auth::user()->profile->description ?? "N/A"}}</span>
                </div>

                <div class="text-left pl-4 pt-3">
                    <p class="text-base underline font-medium text-gray-700 mr-2"><a href="{{ Auth::user()->profile->linkUrl ?? "Link not set" }}">Portfolio</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex pt-4">
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
      </div>

      <div class="flex pt-4">
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
        <div class="flex-1 text-center px-4 py-2 m-2">
          <img
            class="w-full"
            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
          />
        </div>
      </div>


</x-app-layout>