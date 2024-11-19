<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main class="h-[88svh] overflow-y-auto">
    <div class="max-w-6xl mx-auto">


        <div class=" mx-auto px-32 flex flex-col">
            <form method="POST" enctype="multipart/form-data">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-3xl font-semibold text-gray-900">Personal Information</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                    <?php if (isset($errors['body'])): ?>
                        <p class="text-red-500"><?= $errors['body'] ?></p>
                    <?php endif; ?>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first-name" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['first_name'] ?>">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last-name" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['last_name'] ?>">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Student ID No.</label>
                            <div class="mt-2">
                                <input name="stud_id" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['stud_id'] ?>">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input name="email" type="email" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['email'] ?>">
                            </div>
                        </div>
                        <div class="sm:col-span-1">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Birthday</label>
                            <div class="mt-2">
                                <input name="birthday" type="date" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['birthday'] ?>">
                            </div>
                        </div>
                        <div class="sm:col-span-1">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                            <div class="mt-2">
                                <input name="phone" type="text" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['phone'] ?>">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="course" class="block text-sm/6 font-medium text-gray-900">Course</label>
                            <div class="mt-2">
                                <select id="course" name="course_id" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
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
                            <label for="address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                            <div class="mt-2">
                                <input type="text" name="address" id="address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" value="<?= $profile['address'] ?>">
                            </div>
                        </div>

                        
                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Profile picture</label>
                            <div class="mt-2 flex justify-center  w-max">
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
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6 pb-8">
                    <a href="/student/profile" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    const fileInput = document.getElementById('file-upload');
    const fileNameDisplay = document.getElementById('file-name');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : "No file selected";
        fileNameDisplay.textContent = fileName;
    });
</script>

<?php require('partials/footer.php') ?>