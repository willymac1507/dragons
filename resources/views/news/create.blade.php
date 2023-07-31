<x-app-layout>

    <section class="max-w-[75%] p-8 mx-auto">
        <form id="newsForm" enctype="multipart/form-data" action="{{ route('news.store') }}" method="post">
            @csrf

            <div class="space-y-12">
                <div class="pb-4">
                    <h2 class="text-center text-base font-semibold leading-7 text-gray-900">Add News Item</h2>
                    <p class="text-center mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so
                        be
                        careful what you share.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4 sm:col-start-2">
                            <label for="headline"
                                   class="block text-sm font-medium leading-6 text-gray-900">Headline</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                    <input type="text"
                                           name="headline"
                                           id="headline"
                                           autocomplete="headline"
                                           class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="your headline here"
                                           value="{{ old('headline') }}"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full mt-6">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">News</label>
                            <div class="mt-2">
                                <label for="editor"></label><textarea name="body" id="editor">{{ old('body') }}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Add your news item above.</p>
                        </div>

                        <input class="border border-gray-400 p-2 w-full"
                               type="hidden"
                               name="slug"
                               id="slug"
                               value="{{ old('slug') }}"
                               required
                        >

                        <div class="col-span-full mt-6">
                            <div class="mb-6">
                                <label class="block text-sm font-medium leading-6 text-gray-900"
                                       for="coverPhoto"
                                >
                                Cover photo (640px x 480px .png, .jpg, .webp)
                                </label>

                                <input class="border border-gray-400 p-2 w-full"
                                       type="file"
                                       accept="image/*"
                                       name="coverPhoto"
                                       id="coverPhoto"
                                       value="{{ old('coverPhoto') }}"
                                       required
                                >

                                @error('coverPhoto')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-center gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </section>

</x-app-layout>
