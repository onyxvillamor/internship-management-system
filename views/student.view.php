<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="p-6 space-y-6 max-w-5xl mx-auto">
       
        <div class="bg-white p-4">
            <h2 class="text-3xl font-semibold">Welcome back, <?= $profile['first_name'] ?>!</h2>
            <p class="text-gray-600 text-lg">Here's an overview of your internship application status.</p>
        </div>

        <!-- Internship Application Status Card -->
        <div class="flex space-x-4">
            <div class="flex-1 shadow-lg <?= ($profile['status'] === 'Pending') ? 'bg-yellow-100' : (($profile['status'] === 'Accepted') ? 'bg-green-100' : (($profile['status'] === 'Rejected') ? 'bg-red-100' : '')) ?> p-6 rounded-lg">
                <h3 class="text-lg font-medium">Application Status</h3>
                <?php if (empty($profile['status'])): ?>
                    <p class="text-gray-600 font-thin text-lg">You have not yet applied for any internships.</p>
                    <a href="/student/internships" class="text-blue-500 hover:underline">Apply Now</a>
                <?php else: ?>
                    <p class="text-lg"><span class="font-semibold"><?= $profile['title'] ?></span> - <?= $profile['company_name'] ?></p>
                    <p class="<?= ($profile['status'] === 'Pending') ? 'text-yellow-500' : (($profile['status'] === 'Accepted') ? 'text-green-700' : (($profile['status'] === 'Rejected') ? 'text-red-700' : '')) ?>  text-xl">
                        <?= $profile['status'] ?>
                    </p>
                    <a href="/student/applications" class="text-blue-500 hover:underline mt-2 inline-block">View Application Details</a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
            <div class="flex space-x-4">
                <a href="/student/applications" class="flex-1 text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    <i class="fa-solid fa-file-alt mr-2"></i> View Applications
                </a>
                <a href="/student/internships" class="flex-1 text-center bg-green-600 text-white py-3 rounded-lg hover:bg-green-700">
                    <i class="fa-solid fa-briefcase mr-2"></i> Available Internships
                </a>
                <a href="/student/profile" class="flex-1 text-center bg-gray-600 text-white py-3 rounded-lg hover:bg-gray-700">
                    <i class="fa-solid fa-user mr-2"></i> View Profile
                </a>
            </div>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>
