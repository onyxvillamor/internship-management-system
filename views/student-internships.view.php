<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh]">
    <div class="max-w-4xl mx-auto p-6">

        <!-- Filter by Course -->
        <form method="GET" class="mb-6">
            <label for="course" class="font-semibold text-lg mr-2">Filter by Course:</label>
            <select name="course_id" id="course" class="p-2 border rounded-l-md">
                <option value="">All Courses</option>
               
                <?php foreach ($courses as $course): ?>
                    <option value="<?= $course['course_id']; ?>" <?= isset($_GET['course_id']) && $_GET['course_id'] == $course['course_id'] ? 'selected' : ''; ?>>
                        <?= $course['course_name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="bg-blue-500 text-white rounded-r-md hover:bg-blue-600 px-4 py-2">Filter</button>
        </form>

        <div class="space-y-6">
            <?php foreach ($internships as $internship): ?>
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold"><?= $internship['title'] ?></h2>
                        <span class="text-sm text-gray-500">Start Date: <?= $internship['start_date'] ?></span>
                    </div>
                    <p><strong>Company:</strong> <?= $internship['company_name'] ?></p>
                    <p><strong>Location:</strong> <?= $internship['location'] ?></p>
                    <p><strong>Description:</strong> <?= $internship['description'] ?></p>
                    <p><strong>Preferred Course:</strong> <?= $internship['course_name'] ?></p>
                    <div class="flex justify-end">
                        <a href="/student/internships/view?id=<?= $internship['id'] ?>" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Learn More</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</main>

<?php require('partials/footer.php') ?>
