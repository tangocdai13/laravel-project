<x-app-layout>
    <x-slot name="header">
        <div class="toolbar" style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('User List') }}
            </h2>
            <a href="{{ route('user.create') }}">Create New</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Family</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users->count() > 0)
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->user_type }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ optional($user::find($user->id)->family)->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender_label }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Edit </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" onclick="return confirm('Bạn có chắc muốn xoá không?')">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <td colspan="6">Không có bản ghi nào cả</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
