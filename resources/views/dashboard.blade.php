<x-app-layout>
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif
    <div class="py-8 px-6 space-y-8">
        <!-- Welcome Card -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Welcome back, {{ Auth::user()->name }} 👋
            </h1>
            <p class="mt-2 text-gray-600">
                Here’s what’s happening in your application today.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl p-6 shadow-lg">
                <h2 class="text-xl font-semibold">Students</h2>
                <p class="text-3xl font-bold mt-2">120</p>
                <a href="{{ route('students.index') }}" class="text-sm underline mt-2 block">View all</a>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-xl p-6 shadow-lg">
                <h2 class="text-xl font-semibold">Teachers</h2>
                <p class="text-3xl font-bold mt-2">12</p>
                <a href="#" class="text-sm underline mt-2 block">View all</a>
            </div>

            <div class="bg-gradient-to-r from-pink-500 to-rose-600 text-white rounded-xl p-6 shadow-lg">
                <h2 class="text-xl font-semibold">Courses</h2>
                <p class="text-3xl font-bold mt-2">8</p>
                <a href="#" class="text-sm underline mt-2 block">View all</a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Quick Actions</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('students.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                    ➕ Add Student
                </a>

                <a href="{{ route('students.index') }}" 
                   class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
                    📋 Manage Students
                </a>
                <a href="#" 
                   class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">
                    ⚙ Settings
                </a>
            </div>
        </div>

        <!-- Recent Activity + Notifications -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">📊 Recent Activity</h2>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-2 px-3 text-left">User</th>
                            <th class="py-2 px-3 text-left">Action</th>
                            <th class="py-2 px-3 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="py-2 px-3">Ravindu</td>
                            <td class="py-2 px-3">Added new student</td>
                            <td class="py-2 px-3">2025-09-15</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-3">Kaushalya</td>
                            <td class="py-2 px-3">Edited course details</td>
                            <td class="py-2 px-3">2025-09-14</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-3">Nethmi</td>
                            <td class="py-2 px-3">Deleted teacher</td>
                            <td class="py-2 px-3">2025-09-13</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Notifications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">🔔 Notifications</h2>
                <ul class="space-y-3">
                    <li class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded">
                        New student registration pending approval
                    </li>
                    <li class="bg-green-50 border-l-4 border-green-500 p-3 rounded">
                        Teacher dashboard updated
                    </li>
                    <li class="bg-yellow-50 border-l-4 border-yellow-500 p-3 rounded">
                        Course “Laravel Basics” is about to start
                    </li>
                </ul>
            </div>
        </div>

        <!-- Profile Summary -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">👤 Profile Summary</h2>
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center text-2xl font-bold text-gray-600">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                    <p class="text-gray-600">{{ Auth::user()->email }}</p>
                    <a href="#" class="text-blue-600 hover:underline text-sm">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>