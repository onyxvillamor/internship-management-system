<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
<div class="p-6 space-y-4">
   
    <div class="bg-white p-4 ">
        <h2 class="text-2xl font-semibold">Welcome back, <?= $profile['first_name'] ?>!</h2>
        <p class="text-gray-600 text-lg">Here's an overview of your internship journey so far.</p>
    </div>

    <div class="flex space-x-4">
        <div class="flex-1 shadow-md <?= ($profile['status'] === 'Pending')? 'bg-yellow-100' : (($profile['status'] === 'Accepted')? 'bg-green-100' : (($profile['status'] === 'Rejected')? 'bg-red-100': '')) ?> p-4 rounded-lg">
            <h3 class="text-lg font-medium">Application Status</h3>
            <p class="<?= ($profile['status'] === 'Pending')? 'text-yellow-500' : (($profile['status'] === 'Accepted')? 'text-green-700' : (($profile['status'] === 'Rejected')? 'text-red-700': '')) ?> font-semibold"><?= $profile['status'] ?></p>
            <a href="/applications" class="text-black hover:underline">View Details</a>
        </div>
        
      
        <div class="flex-1 shadow-md p-4 rounded-lg">
            <h3 class="text-lg font-medium">Notifications</h3>
            <ul class="text-gray-700 list-disc list-inside">
                <li>New internship opportunity available!</li>
                <li>Submit your SIT report by Nov 20th.</li>
            </ul>
            <a href="/student/notifications" class="text-blue-500 hover:underline">View All</a>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <h3 class="text-lg font-medium">New Internship Opportunities</h3>
        <ul class="space-y-2">
            <li class="flex justify-between">
                <span>Web Developer at PocketDevs</span>
                <a href="/student/internship" class="text-blue-500 hover:underline">Apply Now</a>
            </li>
            <li class="flex justify-between">
                <span>Data Analyst at Pixel8</span>
                <a href="/student/internship" class="text-blue-500 hover:underline">Apply Now</a>
            </li>
        </ul>
        <a href="/student/internship" class="text-blue-600 hover:underline">View All Internships</a>
    </div>
</div>

</main>

<?php require('partials/footer.php') ?>