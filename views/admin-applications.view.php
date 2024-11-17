<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main class="overflow-y-auto h-[88svh] p-6">

    <h3 class="text-2xl font-semibold mb-6"></h3>


    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr class="text-left">
                <th class="px-4 py-2 border-b">Profile Picture</th>
                <th class="px-4 py-2 border-b">Student ID</th>
                <th class="px-4 py-2 border-b">Name</th>
                <th class="px-4 py-2 border-b">Course</th>
                <th class="px-4 py-2 border-b">Internship Status</th>
                <th class="px-4 py-2 border-b"></th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($students as $student): ?>
                <tr>
                    <td class="px-4 py-2 border-b text-center">
                        <img src="/views/img/<?= $student['img_fileName']; ?>" alt="Profile Picture" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="px-4 py-2 border-b"><?= $student['stud_id']; ?></td>
                    <td class="px-4 py-2 border-b"><?= $student['first_name'] . ' ' . $student['last_name']; ?></td>
                    <td class="px-4 py-2 border-b"><?= $student['course_name']; ?></td>
                    <td class="px-4 py-2 border-b <?= ($student['status'] === 'Pending') ? 'text-yellow-500' : (($student['status'] === 'Accepted') ? 'text-green-500' : (($student['status'] === 'Rejected') ? 'text-red-500' : '')); ?>">
                        <?= $student['status']; ?>
                    </td>

                    <td class="px-4 py-2 border-b text-center">
                        <a href="/admin/applications/view?id=<?= $student['id'] ?>" class="bg-green-500 text-white rounded-md hover:bg-green-600 px-2 py-1">View Details</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php require('partials/footer.php'); ?>