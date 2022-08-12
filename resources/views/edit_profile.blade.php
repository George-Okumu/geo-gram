<x-app-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <h2 class="font-extrabold text-transparent text-center pb-4 text-xl bg-clip-text bg-gradient-to-r from-blue-400 to-blue-900">Edit Your Profile</h2>
        <form action="/profile/{{Auth::user()->id}}" enctype="multipart/form-data" method="POST">
            @csrf

            @method('PATCH')
            <!--On the form the method is Post, coz we cant change it, so we add this directive for update to be succesfull-->

            <div class="form-group mb-6">
                <input type="text" id="title" name="title" value="{{ old('title') ?? Auth::user()->profile->title ?? 'Na' }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>

            <div class="form-group mb-6">
                <input type="text" id="linkUrl" name="linkUrl" value="{{old('linkUrl') ?? Auth::user()->profile->linkUrl ?? 'Na'}}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Profile link">
            </div>

            <div class="form-group mb-6">
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transitionease-in-outm-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="description" name="description" value="{{ old('description') ?? Auth::user()->profile->description ?? 'Na'}}" placeholder="Description" />
            </div>

            <div class="form-group mb-6">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="multiple_files">Upload multiple files</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" id="profileImage" name="profileImage"  multiple="">

            </div>
            <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md  hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Save</button>
        </form>
    </div>
</x-app-layout>