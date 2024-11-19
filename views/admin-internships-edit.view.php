<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="overflow-y-auto h-[88svh] p-8">
    <div class="mx-auto px-32 flex flex-col">
        <form method="POST" enctype="multipart/form-data">
            <div class="border-b border-gray-900/10 pb-12">

                <?php if (isset($errors['body'])): ?>
                    <p class="text-red-500"><?= $errors['body'] ?></p>
                <?php endif; ?>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" value="<?= htmlspecialchars($internship['title']) ?>" id="title" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="company" class="block text-sm font-medium text-gray-900">Company Name</label>
                        <div class="mt-2">
                            <input type="text" name="company_name" value="<?= htmlspecialchars($internship['company_name']) ?>" id="company" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm"><?= htmlspecialchars($internship['description']) ?></textarea>
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="start_date" class="block text-sm font-medium text-gray-900">Start Date</label>
                        <div class="mt-2">
                            <input type="date" name="start_date" value="<?= htmlspecialchars($internship['start_date']) ?>" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="end_date" class="block text-sm font-medium text-gray-900">End Date</label>
                        <div class="mt-2">
                            <input type="date" name="end_date" value="<?= htmlspecialchars($internship['end_date']) ?>" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="course" class="block text-sm font-medium text-gray-900">Preferred Course</label>
                        <div class="mt-2">
                            <select id="country" name="course" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                <option disabled selected>Select Course</option>
                                <option value="1">BET major in Computer Engineering Technology</option>
                                <option value="4">BET major in Chemical Engineering Technology</option>
                                <option value="5">BET major in Electrical Engineering Technology</option>
                                <option value="6">BET major in Manufacturing Engineering Technology</option>
                                <option value="7">BET major in Electronics Engineering Technology</option>
                                <option value="2">BS Mechanical Engineering</option>
                                <option value="3">BS Electrical Engineering</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="location" class="block text-sm font-medium text-gray-900">Location</label>
                        <div class="mt-2">
                            <input type="text" name="location" value="<?= htmlspecialchars($internship['location']) ?>" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm">
                        </div>
                    </div>

                    <div class="text-center">

                        <div class="flex flex-col space-y-2">
                            <label for="file-upload" class="cursor-pointer bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md w-fit">
                                Choose File
                            </label>
                            <input id="file-upload" name="image" type="file" class="hidden">
                            <span id="file-name" class="text-gray-700">No file selected</span>
                        </div>

                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/admin/internships" class="text-sm font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-500">Save Changes</button>
            </div>
        </form>
    </div>
</main>

<?php require('partials/footer.php') ?>