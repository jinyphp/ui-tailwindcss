@props(['id' => null, 'maxWidth' => null])

<x-tail-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>

    <div class="flex flex-col rounded shadow-sm bg-white overflow-hidden w-full max-w-md mx-auto" role="document">
        <div class="p-5 lg:p-6 grow w-full flex space-x-5">
            @if (isset($content))
                <div class="w-16 h-16 flex-none flex items-center justify-center rounded-full bg-red-100">
                    <svg class="hi-solid hi-shield-exclamation inline-block w-8 h-8 text-red-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-1">
                        {{ $content }}
                    </h4>
                    <p class="text-gray-600">

                    </p>
            @endif
        </div>
    </div>
    <div class="py-4 px-5 lg:px-6 w-full bg-gray-50 text-right space-x-1">
        @if (isset($footer))
            <div class="px-4 py-3 bg-gray-100">
                {{ $footer }}
            </div>
        @endif

        <button type="button"
            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-transparent text-red-600 hover:text-red-400 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:text-red-600">
            Cancel
        </button>
        <button type="button"
            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-red-700 bg-red-700 text-white hover:text-white hover:bg-red-800 hover:border-red-800 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:bg-red-700">
            Yes, delete file
        </button>
    </div>
    </div>
    <!-- END Modal Dialog -->

</x-tail-modal>
