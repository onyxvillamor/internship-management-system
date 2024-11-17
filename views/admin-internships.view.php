<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh] p-8">


        <!-- Add Internship Button -->
        <div class="mb-6">
            <a href="/admin/internships/create" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600">
            New Internship Offer
            </a>
        </div>

        
        <table class="min-w-full table-auto border-collapse text-sm">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Title</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Company</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Location</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Description</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Preferred Course</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Start Date</th>
                    <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-xs">
                <?php foreach($internships as $internship): ?>
              
                <tr class="border">
                    
                    <td class="py-2 px-4"><?= $internship['title'] ?></td>
                    <td class="py-2 px-4"><?= $internship['company_name'] ?></td>
                    <td class="py-2 px-4"><?= $internship['location'] ?></td>
                    <td class="py-2 px-4"><?= $internship['description'] ?></td>
                    <td class="py-2 px-4 "><?= $internship['course_name'] ?></td> 
                    <td class="py-2 px-4 "><?= $internship['start_date'] ?></td> 
                    <td class="py-2 px-4 flex flex-row items-center gap-x-2">
                        <a href="/admin/internships/view" class="bg-green-500 text-white px-2 py-1 mt-2 rounded-md hover:bg-green-700">View</a>
                        <a href="edit-internship.php?id=1" class="bg-blue-500 text-white px-2 py-1 mt-2 rounded-md hover:bg-blue-700">Edit</a>
                        <a href="delete-internship.php?id=1" class="bg-red-500 text-white px-2 py-1 mt-2 rounded-md hover:bg-red-700">Delete</a>
                    </td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>


</main>

<?php require('partials/footer.php') ?>
