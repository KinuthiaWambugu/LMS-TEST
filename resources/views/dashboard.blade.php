<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Welcome Card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-semibold">
                        Welcome, {{ auth()->user()->name }}
                    </p>
                    <p class="text-sm mt-1">
                        Role: <span class="font-bold">{{ auth()->user()->role }}</span>
                    </p>
                </div>
            </div>

            {{-- Navigation Card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-lg font-semibold mb-4">Quick Access</h3>

                    <div class="flex flex-col space-y-3">

                        {{-- Admin --}}
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}"
                               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 w-fit">
                                Admin Dashboard
                            </a>
                        @endif

                        {{-- Learner --}}
                        @if(auth()->user()->isLearner())
                            <a href="{{ route('learner.dashboard') }}"
                               class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 w-fit">
                                Learner Dashboard
                            </a>
                        @endif

                        {{-- Profile --}}
                        <a href="{{ route('profile.edit') }}"
                           class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 w-fit">
                            Edit Profile
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>