<x-app-layout>
    <div class="py-8 px-6 max-w-5xl mx-auto space-y-6">

        <h1 class="text-2xl font-bold">📋 Manage Students</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
            <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">#</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Birthday</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Address</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Age</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-200">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($students as $student)
                        <tr>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->id }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->name }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->email }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->birthday ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->address ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600">{{ $student->age ?? '-' }}</td>
                            <td class="px-6 py-3 text-sm text-gray-700 dark:text-gray-600 space-x-2">
                                <a href="{{ route('students.edit', $student->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if($students->isEmpty())
                        <tr>
                            <td colspan="7" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">No students found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
