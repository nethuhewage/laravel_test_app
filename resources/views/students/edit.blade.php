<x-app-layout>
    <div class="py-8 px-6 max-w-3xl mx-auto space-y-6">
        <h1 class="text-2xl font-bold">✏ Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded-xl shadow-lg">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-semibold">Name</label>
                <input type="text" name="name" value="{{ $student->name }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Email</label>
                <input type="email" name="email" value="{{ $student->email }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Birthday</label>
                <input type="date" name="birthday" value="{{ $student->birthday }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div>
                <label class="block mb-1 font-semibold">Address</label>
                <input type="text" name="address" value="{{ $student->address }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div>
                <label class="block mb-1 font-semibold">Age</label>
                <input type="number" name="age" value="{{ $student->age }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('students.index') }}" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
