<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main class="overflow-y-auto h-[88svh] p-6">
    <div class="max-w-5xl mx-auto bg-white p-6 text-xl">

        <div class="p-6 shadow-md rounded-md">
              <h2 class="text-4xl font-bold">Admin Details</h2>
        <p class="mb-4">Manage your account details and view your admin information below.</p>
        <p><strong>Username:</strong> <?= $adminDetails['username'] ?></p>
        <p><strong>Admin ID:</strong> <?= $adminDetails['admin_id'] ?></p>
        </div>
      

    </div>

    <div class="max-w-4xl mx-auto bg-white p-6">
        <h2 class="text-2xl font-bold mb-4">Other Admins</h2>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="text-left">
                    <th class="px-4 py-2 border-b">Admin ID</th>
                    <th class="px-4 py-2 border-b">Username</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($otherAdmins)): ?>
                    <?php foreach ($otherAdmins as $admin): ?>
                        <tr>
                            <td class="px-4 py-2 border-b"><?= $admin['admin_id'] ?></td>
                            <td class="px-4 py-2 border-b"><?= $admin['username'] ?></td>
                            <td class="px-4 py-2 border-b">
                                <a href="/admin/view?id=<?= $admin['admin_id'] ?>" class="text-blue-500 hover:underline">View</a> |
                                <a href="/admin/delete?id=<?= $admin['admin_id'] ?>" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="px-4 py-2 text-center text-gray-500">No other admins found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php require('partials/footer.php'); ?>