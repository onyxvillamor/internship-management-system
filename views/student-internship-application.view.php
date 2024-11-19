<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh]">
    <a href="/student/internships" class="inline-block mt-4 ml-4 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Go back</a>
    <form action="/student/internships/apply" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto mt-2">
        <h2 class="text-2xl font-semibold mb-4 text-center">Apply for Internship</h2>

        <h3 class="text-lg font-semibold">Internship Title</h3>
        <p class="text-2xl font-thin mb-8"><?= $internship['title'] ?> - <strong><?= $internship['company_name'] ?></strong></p>

     
        <div class="mb-4">
            <label for="cover_letter" class="block text-sm font-medium text-gray-700 mb-1">Cover Letter</label>
            <textarea id="cover_letter" name="cover_letter" rows="4" placeholder="Write your cover letter..." class="w-full border border-gray-300 p-2 rounded-md focus:ring focus:ring-blue-500" required></textarea>
        </div>

        
        <div class="mb-4">
            <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Attach Resume</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <p class="text-xs text-gray-500 mt-1">Accepted file types: .pdf, .doc, .docx (Max size: 2MB)</p>
        </div>

        <input type="hidden" value="<?= $_GET['id'] ?>" name="internship_id">
        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition">
                <i class="fa-solid fa-paper-plane mr-2"></i> Submit Application
            </button>
        </div>
    </form>


</main>

<?php require('partials/footer.php') ?>