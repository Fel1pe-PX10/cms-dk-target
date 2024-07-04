<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                {{ __('Targets') }}
                            </h2>
                        </header>
                        
                        <form method="get" action="{{ route('news.index') }}">
                            
                            @if (@session('status')):
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">{{ session('status') }}</span></p>
                            @endif
                            
                            
                            <!-- Target Id -->
                            <div>
                                <label for="targetId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('News Name') }}</label>
                                <select id="targetId" name="targetId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Target</option>
                                    @foreach($targets as $target)
                                    <option value="{{ $target->id }}">{{ $target->name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                            
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Show news') }}
                                </x-button>
                            </div>
                            
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>