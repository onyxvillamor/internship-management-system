<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main class="overflow-y-auto h-[88svh]">
    <div class="max-w-4xl mx-auto p-6">
        <?php foreach ($applications as $application): ?>
            <?php if (isset($application['id'])): ?>
                <div class="space-y-6">
                    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4 mb-8">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold"><?= $application['title'] ?></h2>
                            <span class="text-sm text-gray-500">Status: <span class="<?= ($application['status'] === 'Pending') ? 'text-yellow-500' : (($application['status'] === 'Accepted') ? 'text-green-500' : (($application['status'] === 'Rejected') ? 'text-red-500' : '')); ?>"><?= $application['status'] ?></span></span>
                        </div>
                        <p><strong>Company:</strong> <?= $application['company_name'] ?></p>
                        <p><strong>Location:</strong> <?= $application['location'] ?></p>
                        <p><strong>Deadline:</strong> <?= $application['start_date'] ?></p>
                        <p><strong>Applied on:</strong> <?= $application['application_date'] ?></p>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Application Date: <?= $application['start_date'] ?></span>
                           
                        </div>
                    </div>

                </div>
            <?php else: ?>
                <div class="max-w-2xl mx-auto my-6 bg-white p-6 text-center">
                    <h5 class="text-5xl font-thin text-gray-800 mb-4">No Internship Applications</h5>
                    <p class="text-gray-600 text-lg">You have not yet applied to any internship.</p>
                </div>

            <?php endif ?>
    </div>
<?php endforeach ?>


</main>

<?php require('partials/footer.php') ?>