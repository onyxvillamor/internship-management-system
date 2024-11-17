<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main class="overflow-y-auto h-[88svh]">
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-8 text-center">My Internship Applications</h1>

    <div class="space-y-6">
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Software Developer Intern</h2>
                <span class="text-sm text-gray-500">Status: <span class="text-green-500">Accepted</span></span>
            </div>
            <p><strong>Company:</strong> XYZ Corp</p>
            <p><strong>Location:</strong> Remote</p>
            <p><strong>Deadline:</strong> Dec 15, 2024</p>
            <p><strong>Applied on:</strong> Nov 20, 2024</p>
            <div class="flex justify-between">
                <span class="text-gray-500">Application Date: Nov 20, 2024</span>
                <a href="/application-details/xyz-corp" class="text-blue-500 hover:underline">View Details</a>
            </div>
        </div>

      
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Web Developer Intern</h2>
                <span class="text-sm text-gray-500">Status: <span class="text-yellow-500">Under Review</span></span>
            </div>
            <p><strong>Company:</strong> ABC Inc.</p>
            <p><strong>Location:</strong> On-site, New York</p>
            <p><strong>Deadline:</strong> Dec 25, 2024</p>
            <p><strong>Applied on:</strong> Nov 18, 2024</p>
            <div class="flex justify-between">
                <span class="text-gray-500">Application Date: Nov 18, 2024</span>
                <a href="/application-details/abc-inc" class="text-blue-500 hover:underline">View Details</a>
            </div>
        </div>

    
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Data Analyst Intern</h2>
                <span class="text-sm text-gray-500">Status: <span class="text-red-500">Rejected</span></span>
            </div>
            <p><strong>Company:</strong> DataTech Solutions</p>
            <p><strong>Location:</strong> Remote</p>
            <p><strong>Deadline:</strong> Jan 10, 2025</p>
            <p><strong>Applied on:</strong> Nov 25, 2024</p>
            <div class="flex justify-between">
                <span class="text-gray-500">Application Date: Nov 25, 2024</span>
                <a href="/application-details/data-tech-solutions" class="text-blue-500 hover:underline">View Details</a>
            </div>
        </div>

    </div>
</div>

</main>

<?php require('partials/footer.php') ?>