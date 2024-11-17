<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main class="overflow-y-auto h-[88svh]">
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-8 text-center">Notifications</h1>

 
    <div class="space-y-6">
       
        <div class="bg-white shadow-lg rounded-lg p-6 flex items-center space-x-4">
            <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-green-500 text-2xl"></i>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Your Application for "Software Developer Intern" has been Accepted!</h2>
                <p class="text-sm text-gray-500">Congrats! You've been selected for the Software Developer Intern position at XYZ Corp. Please check your email for further instructions.</p>
                <p class="text-xs text-gray-400 mt-2">Received on: Nov 25, 2024</p>
            </div>
        </div>

     
        <div class="bg-white shadow-lg rounded-lg p-6 flex items-center space-x-4">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-circle text-yellow-500 text-2xl"></i>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Deadline for "Data Analyst Intern" application is approaching!</h2>
                <p class="text-sm text-gray-500">Don't forget, the deadline for submitting your application for DataTech Solutions' Data Analyst Intern position is fast approaching. Apply by Dec 10, 2024.</p>
                <p class="text-xs text-gray-400 mt-2">Received on: Nov 20, 2024</p>
            </div>
        </div>


        <div class="bg-white shadow-lg rounded-lg p-6 flex items-center space-x-4">
            <div class="flex-shrink-0">
                <i class="fas fa-times-circle text-red-500 text-2xl"></i>
            </div>
            <div>
                <h2 class="font-semibold text-lg">Your Application for "Web Developer Intern" was Rejected</h2>
                <p class="text-sm text-gray-500">We regret to inform you that your application for the Web Developer Intern position at ABC Inc. was not successful. Keep applying to other opportunities!</p>
                <p class="text-xs text-gray-400 mt-2">Received on: Nov 22, 2024</p>
            </div>
        </div>

     
        <div class="bg-white shadow-lg rounded-lg p-6 flex items-center space-x-4">
            <div class="flex-shrink-0">
                <i class="fas fa-bell text-blue-500 text-2xl"></i>
            </div>
            <div>
                <h2 class="font-semibold text-lg">New Internships Available</h2>
                <p class="text-sm text-gray-500">Several new internship opportunities are now available. Check the "Available Internships" page to apply!</p>
                <p class="text-xs text-gray-400 mt-2">Received on: Nov 18, 2024</p>
            </div>
        </div>

    </div>
</div>

</main>

<?php require('partials/footer.php') ?>