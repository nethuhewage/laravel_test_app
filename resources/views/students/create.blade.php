<x-app-layout>
    <div class="py-8 px-6 max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">➕ Add New Student</h1>

        <form action="{{ route('students.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded-xl shadow-lg">
            @csrf

            <div>
                <label class="block text-gray-700 dark:text-gray-400">Name</label>
                <input type="text" name="name" class="w-full mt-1 p-2 border rounded" required>
            </div>

            <div>
                <label class="block text-gray-700 dark:text-gray-400">Email</label>
                <input type="email" name="email" class="w-full mt-1 p-2 border rounded" required>
            </div>

            <div>
                <label class="block text-gray-700 dark:text-gray-400">Birthday</label>
                <input type="date" name="birthday" class="w-full mt-1 p-2 border rounded">
            </div>

            <div>
                <label class="block text-gray-700 dark:text-gray-400">Address</label>
                <input type="text" name="address" class="w-full mt-1 p-2 border rounded">
            </div>

            <div>
                <label class="block text-gray-700 dark:text-gray-400">Age</label>
                <input type="number" name="age" class="w-full mt-1 p-2 border rounded">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Save Student
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
