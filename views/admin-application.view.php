<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh]">
<a href="/admin/applications" class="inline-block m-4 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">
            Back to Applications
        </a>
    <!-- View Application Panel -->
    <div class="bg-white shadow-md rounded-md mx-4 p-6 mb-6">
        
        <h2 class="text-xl font-semibold mb-4">Application Details</h2>

        <div class="flex flex-col md:flex-row space-x-8">

            <div class="space-y-2">
                <h3 class="font-medium text-lg">Applicant Information</h3>
                <p><strong>Name:</strong><?= htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?></p>
                <p><strong>Student ID:</strong><?= htmlspecialchars($student['stud_id']); ?></p>
                <p><strong>Course:</strong><?= htmlspecialchars($student['course_name']); ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($student['email']); ?></p>
                <p><strong>Phone:</strong> <?= htmlspecialchars($student['phone']); ?></p>
            </div>

            <div class="space-y-2">
                <h3 class="font-medium text-lg">Internship Details</h3>
                <p><strong>Position:</strong> <?= htmlspecialchars($student['title']); ?></p>
                <p><strong>Company:</strong> <?= htmlspecialchars($student['company_name']); ?></p>
                <p><strong>Location:</strong> <?= htmlspecialchars($student['location']); ?></p>
                <p><strong>Internship Duration:</strong> <?= htmlspecialchars($student['start_date']) . ' - ' . htmlspecialchars($student['end_date']); ?></p>
            </div>

            <div class="space-y-2">
                <h3 class="font-medium text-lg">Application Status</h3>
                <p><strong>Status:</strong>
                    <span class="mx-1 <?= ($student['status'] === 'Pending') ? 'text-yellow-500' : (($student['status'] === 'Accepted') ? 'text-green-500' : (($student['status'] === 'Rejected') ? 'text-red-500' : '')); ?>">
                        <?= htmlspecialchars($student['status']); ?>
                    </span>
                </p>
                <p><strong>Date Submitted:</strong> <?= htmlspecialchars($student['application_date']); ?></p>
                <p><strong>Cover Letter:</strong> <?= htmlspecialchars($student['cover_letter']); ?></p>
            </div>

            <div class="space-y-2">
                <h3 class="font-medium text-lg">Resume</h3>
                <a href="/views/applicant-resume/<?= $student['resume'] ?>" download class="text-blue-500 hover:underline">
                    Download Resume
                </a>
            </div>

        </div>

        <div class="mt-6 space-x-4">
            <?php if ($student['status'] == 'Accepted' || $student['status'] == 'Rejected'): ?>
           
            <?php else: ?>
                <a href="/admin/applications/action?id=<?= htmlspecialchars($student['id']); ?>&status=Accepted" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                    Approve
                </a>
                <a href="/admin/applications/action?id=<?= htmlspecialchars($student['id']); ?>&status=Rejected" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                    Reject
                </a>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>
