<?php require('partials/head.php'); ?>


<main class="flex justify-center items-center min-h-screen w-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Admin Registration</h2>

        <!-- Display errors if there are any -->
        <?php if (isset($errors['body'])): ?>
            <div class="bg-red-500 text-white p-3 mb-4 rounded-md">
                <?= htmlspecialchars($errors['body']); ?>
            </div>
        <?php endif; ?>

        <!-- Registration Form -->
        <form action="/admin/register" method="POST">
            <div class="mb-4">
                <label for="stud_id" class="block text-sm font-medium text-gray-700">Admin ID</label>
                <input type="text" id="admin_id" name="admin_id" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Enter Admin ID" required>
            </div>

            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="first_name" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Enter Username" required>
            </div>

        

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Enter Password" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition">
                    Register
                </button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p>Already have an account? <a href="/admin/login" class="text-blue-500 hover:underline">Login here</a></p>
        </div>
    </div>
</main>

<?php require('partials/footer.php'); ?>
