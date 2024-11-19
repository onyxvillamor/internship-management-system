<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main class="overflow-y-auto h-[88svh] p-6">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-semibold">Registered Students</h3>
        <!-- Search Bar -->
        <form action="/admin/students" method="GET" class="flex">
            <input type="text" name="search" class="p-2 rounded-l-md" placeholder="Search by name" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit" class="bg-blue-500 text-white rounded-r-md hover:bg-blue-600 px-4 py-2">Search</button>
        </form>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr class="text-left">
                <th class="px-4 py-2 border-b">Profile Picture</th>
                <th class="px-4 py-2 border-b">Student ID</th>
                <th class="px-4 py-2 border-b">Name</th>
                <th class="px-4 py-2 border-b">Course</th>
                <th class="px-4 py-2 border-b"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

            if ($searchQuery) {
                $filteredStudents = array_filter($students, function($student) use ($searchQuery) {
                    return stripos($student['first_name'], $searchQuery) !== false || stripos($student['last_name'], $searchQuery) !== false;
                });
            } else {
                $filteredStudents = $students;
            }

            foreach ($filteredStudents as $student): ?>
                <tr>
                    <td class="px-4 py-2 border-b text-center">
                        <img src="/views/img/<?= $student['img_fileName']; ?>" alt="Profile Picture" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="px-4 py-2 border-b"><?= $student['stud_id']; ?></td>
                    <td class="px-4 py-2 border-b"><?= $student['first_name'] . ' ' . $student['last_name']; ?></td>
                    <td class="px-4 py-2 border-b"><?= $student['course_name']; ?></td>
                    <td class="px-4 py-2 border-b text-center">
                        <a href="/admin/students/view?id=<?= $student['id'] ?>" class="bg-blue-500 text-white rounded-md hover:bg-blue-600 px-2 py-1">View Profile</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php require('partials/footer.php'); ?>
