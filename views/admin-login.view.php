<?php require('partials/head.php'); ?>

<main class="flex justify-center items-center min-h-screen w-screen bg-gray-100">
<div class="absolute top-4 right-4">
        <a href="/login" class="px-3 py-2 rounded-lg text-white bg-blue-600 hover:bg-blue-700 ">
            Admin Login
        </a>
    </div>
    <div class="max-w-md w-full bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Admin Login</h2>
        
        <form action="/admin/login" method="POST">
            <div class="mb-4">
                <label for="text" class="block text-sm font-medium text-gray-600">Admin ID:</label>
                <input type="text" name="admin_id" id="text" required class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" id="password" required class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-slate-700 text-white p-3 rounded-lg hover:bg-slate-500 transition duration-200">Login</button>
        </form>
        
        <div class="w-full text-center mt-4">
            <a href="/admin/register" class="hover:underline text-blue-600 transition duration-200">Create account</a>
        </div>
    </div>
</main>

<?php require('partials/footer.php'); ?>
