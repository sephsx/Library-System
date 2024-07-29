<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex h-screen">
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <h1 class="text-2xl font-semibold text-gray-700">Library Admin</h1>
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
                    <i class="fas fa-book mr-2"></i> Books
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
                    <i class="fas fa-users mr-2"></i> Members
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
                    <i class="fas fa-calendar-alt mr-2"></i> Borrowed Books
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-semibold text-gray-800">Welcome, Admin</h2>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                        <i class="fas fa-book fa-2x"></i>
                        <h3 class="mt-2 text-xl">Total Books</h3>
                        <p class="mt-2 text-2xl">1500</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                        <i class="fas fa-users fa-2x"></i>
                        <h3 class="mt-2 text-xl">Total Members</h3>
                        <p class="mt-2 text-2xl">300</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md">
                        <i class="fas fa-calendar-alt fa-2x"></i>
                        <h3 class="mt-2 text-xl">Borrowed Books</h3>
                        <p class="mt-2 text-2xl">75</p>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-red-500 text-white p-4 rounded-lg shadow-md">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                        <h3 class="mt-2 text-xl">Overdue Books</h3>
                        <p class="mt-2 text-2xl">20</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="mt-10 bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold text-gray-800">Recent Activity</h3>
                <table class="mt-4 w-full">
                    <thead>
                        <tr>
                            <th class="text-left py-2">Member</th>
                            <th class="text-left py-2">Book</th>
                            <th class="text-left py-2">Date Borrowed</th>
                            <th class="text-left py-2">Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">John Doe</td>
                            <td class="py-2">The Great Gatsby</td>
                            <td class="py-2">2023-07-20</td>
                            <td class="py-2">2023-08-20</td>
                        </tr>
                        <tr>
                            <td class="py-2">Jane Smith</td>
                            <td class="py-2">1984</td>
                            <td class="py-2">2023-07-18</td>
                            <td class="py-2">2023-08-18</td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
