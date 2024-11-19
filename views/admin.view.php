<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh]">
    <div class="container mx-auto p-6">

    <h1 class="text-3xl font-semibold">Welcome, <?= $adminId ?>!</h1>
    <p class="mb-8 text-lg font-light">Monitor internship postings, review student applications, and maintain company collaborations efficiently.</p>


        <!-- Admin Dashboard Overview -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Total Students</h3>
                <p class="text-4xl"><?= $totalUsers; ?></p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Total Accepted Students</h3>
                <p class="text-4xl"><?= $totalAcceptedStudents; ?></p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Applications Pending</h3>
                <p class="text-4xl"><?= $totalPending; ?></p>
            </div>
        </section>


        <section class="bg-white p-4 rounded-lg shadow-md mb-6">
            <h3 class="text-xl font-semibold mb-4">Quick Actions</h3>
            <div class="space-x-4">
                <a href="/admin/internships" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New Internship</a>
                <a href="/admin/students" class="bg-green-500 text-white px-4 py-2 rounded-lg">Manage Students</a>
                <a href="/admin/applications" class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Manage Applications</a>
            </div>
        </section>

    </div>
</main>

<?php require('partials/footer.php'); ?>