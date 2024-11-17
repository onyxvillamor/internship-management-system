<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main class="overflow-y-auto h-[88svh]">
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-8 text-center">Available Internships</h1>

    
    <div class="space-y-6">
    <?php foreach($internships as $internship): ?>
        
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
                <a href="/internship-details/xyz-corp" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Learn More</a>
            </div>
        </div>
    
    <?php endforeach ?>    

    </div>
</div>

</main>

<?php require('partials/footer.php') ?>