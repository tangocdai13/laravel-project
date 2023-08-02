<x-app-layout>
    <x-slot name="header">
        <div class="toolbar" style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('User Information') }}
            </h2>
            <a href="{{ route('user.index') }}">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ !empty($user) ? route('user.update', ['user' => $user->id]) : route('user.store')}}" class="mt-6 space-y-6">
                        @csrf
                        @if(!empty($user))
                            @method('PUT')
                        @endif
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user->email ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div>
                            <x-input-label for="gender" :value="__('Gender')" />
                            <label>
                                <input type="radio" name="gender" value="1" {{ old('gender', $user->gender ?? null) == 1 ? 'checked' : false }} />Male
                            </label>

                            <label>
                                <input type="radio" name="gender" value="2" {{ old('gender', $user->gender ?? null) == 2 ? 'checked' : false }} />Female
                            </label>
                            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password')" />
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>

                        <div>
                            <x-input-label for="password_confirm" :value="__('Password Confirm')" />
                            <x-text-input id="password_confirm" name="password_confirm" type="password" class="mt-1 block w-full" :value="old('password_confirm')" />
                            <x-input-error class="mt-2" :messages="$errors->get('password_confirm')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
