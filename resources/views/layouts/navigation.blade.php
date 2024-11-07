<nav class="border-b border-gray-200 bg-white">
    <div class="px-4 h-16 flex items-center justify-between">
        <!-- Left section: Logo and Navigation -->
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <div class="text-indigo-600 w-8 h-8">
                <svg viewBox="0 0 24 24" class="w-full h-full">
                    <path
                        fill="currentColor"
                        d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6Z"
                    />
                </svg>
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center space-x-8">
                <a href="{{route('students.index')}}" class="{{ request()->routeIs('students.index') ? 'text-indigo-600 font-medium' : 'text-gray-500 hover:text-gray-900' }}">Dashboard</a>
                <a href="{{route('students.attendance')}}" class="{{ request()->routeIs('students.attendance') ? 'text-indigo-600 font-medium' : 'text-gray-500 hover:text-gray-900' }}">Attendance</a>
                <a href="{{route('students.grades')}}" class="{{ request()->routeIs('students.grades') ? 'text-indigo-600 font-medium' : 'text-gray-500 hover:text-gray-900' }}">Grades</a>
                <a href="{{route('students.records')}}" class="{{ request()->routeIs('students.records') ? 'text-indigo-600 font-medium' : 'text-gray-500 hover:text-gray-900' }}">Records</a>
            </div>
        </div>

        <!-- Right section: Search, Notifications, and Profile -->
        <div class="flex items-center space-x-4">
            <!-- Search Bar -->
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <input
                    type="text"
                    placeholder="Search"
                    class="pl-10 pr-4 py-2 w-72 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <!-- Notifications -->
            <button class="p-2 text-gray-400 hover:text-gray-500">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </button>

            <!-- Profile Picture -->
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden">
                <svg viewBox="0 0 24 24" class="w-full h-full">
                    <path
                        fill="currentColor"
                        d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6Z"
                    />
                </svg>
            </div>
        </div>
    </div>
</nav>
