<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh]">
    <a href="/student/internships" class="inline-block mt-4 ml-4 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Go back</a>
    <div class="max-w-4xl mx-auto p-6">

        <h1 class="text-3xl font-semibold mb-8 text-center">Internship Details</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">

            <div class="flex-shrink-0 w-full md:w-1/3">
                <img src="/views/img/<?= $internship['company_logo'] ?>" alt="Company Logo" class="w-full h-40 md:h-48 rounded-lg object-cover">
            </div>

            <div class="flex-grow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800"><?= $internship['title'] ?></h2>
                    <span class="text-sm text-gray-500">Start Date: <?= $internship['start_date'] ?></span>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600"><strong>Company:</strong> <?= $internship['company_name'] ?></p>
                    <p class="text-sm text-gray-600"><strong>Location:</strong> <?= $internship['location'] ?></p>
                    <p class="text-sm text-gray-600"><strong>Preferred Course:</strong> <?= $internship['course_name'] ?></p>
                </div>

                <p class="text-gray-700 mb-4"><strong>Description:</strong> <?= $internship['description'] ?></p>

                <div class="flex justify-between items-center">
                    <div class="text-sm text-gray-500">
                        <p><strong>Duration:</strong> <?= $internship['start_date'] . ' to ' . $internship['end_date'] ?></p>
                    </div>
                    <a href="/student/internships/apply?id=<?= $internship['id'] ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>