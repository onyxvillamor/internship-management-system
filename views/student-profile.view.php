<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="h-[88svh] overflow-y-auto">
    <div class="max-w-6xl mx-auto">
        
        <?php if ($profile && is_array($profile)): ?> 
            <div class="flex flex-col md:flex-row mb-6 items-center md:items-start justify-start md:justify-center p-6">
                <img src="/views/img/<?= htmlspecialchars($profile['img_fileName']) ?>" alt="Profile Picture" class="w-64 h-64 rounded-full mb-4">

                <div class="bg-white p-6 md:ml-12">
                    <h3 class="text-4xl font-semibold mb-4">Personal Information</h3>
                    <p><strong>Name:</strong> <?= htmlspecialchars($profile['first_name'] . ' ' . $profile['last_name']) ?></p>
                    <p><strong>Student ID No.:</strong> <?= htmlspecialchars($profile['stud_id']) ?></p>
                    <p><strong>Course:</strong> <?= htmlspecialchars($profile['course_name']) ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($profile['email']) ?></p>
                    <p><strong>Phone:</strong> <?= htmlspecialchars($profile['phone']) ?></p>
                    <p><strong>Date of Birth:</strong> <?= htmlspecialchars($profile['birthday']) ?></p>
                    <p><strong>Address:</strong> <?= htmlspecialchars($profile['address']) ?></p>
                </div>
                <a href="/student/profile/edit" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition">Edit Profile</a>
            </div>

            <div class="border-b-2 border-gray-300 mx-4 my-4"></div>

            <div class="space-y-2 p-6">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-4">Internship Status</h3>
                    <?php if (isset($profile['status']) && $profile['status'] === 'Accepted'): ?>
                        <p><strong>Current Internship:</strong>
                            <?= htmlspecialchars($profile['company_name']) . ', ' . htmlspecialchars($profile['title']) . ' (' . htmlspecialchars($profile['start_date']) . ' to ' . htmlspecialchars($profile['end_date']) . ')' ?>
                        </p>
                    <?php else: ?>
                        <p><strong>No current internship assigned.</strong></p>
                    <?php endif; ?>
                </div>

                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-4">Application Status</h3>
                    <?php if (isset($profile['company_name'])): ?>
                        <p><strong>Accepted Applications:</strong></p>
                        <ul class="list-disc pl-5">
                            <li><?= htmlspecialchars($profile['company_name']) . ' - ' . htmlspecialchars($profile['title']) ?> (<span class="<?= ($profile['status'] === 'Pending') ? 'text-yellow-500' : (($profile['status'] === 'Accepted') ? 'text-green-500' : (($profile['status'] === 'Rejected') ? 'text-red-500' : '')); ?>"><?= htmlspecialchars($profile['status']) ?></span>)</li>
                        </ul>
                    <?php else: ?>
                        <p><strong>No applications submitted.</strong></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center p-6">
                <h3 class="text-2xl font-semibold text-red-500">Profile not found</h3>
                <p>We couldn't find the profile information. Please check if the student exists in the database.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php require('partials/footer.php') ?>
