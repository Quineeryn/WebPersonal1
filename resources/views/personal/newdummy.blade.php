<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--======== CSS ======== -->
    <link rel="stylesheet" href="../cssfile/styleform.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.0.2/dist/css/ionicons.min.css"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMV8ccR3cpLpM3e0fQsM" crossorigin="anonymous">

    <title>CV Form</title>
</head>


<body>
    <a href="{{ url('personal') }}" class="btn btn-primary float-end">BACK</a>
    <div class="wrapper">
        <div class="header">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progessbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progessbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Personal Information</h2>
                <form action="{{ url('/personalstore') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form_container">
                        <div class="input_wrap photo_wrap">
                            <label class="details">Photo</label>
                            <div class="photos">
                                <input type="file" name="foto" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Description</label>
                            <input type="text" name="deskripsi" placeholder="Enter your description" required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your name" required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Phone Number</label>
                            <input type="number" name="telephone_number" placeholder="Enter your phone number"
                                required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">City</label>
                            <input type="text" name="city" placeholder="Enter your City" required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Address</label>
                            <input type="text" name="address" placeholder="Enter your Address" required>
                        </div>
                        <div class="input_wrap">
                            <label class="details">Link Profile</label>
                            <input type="text" name="link_profile" placeholder="Enter your Link" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_2 data_info" style="display: none;">
                <h2>Education</h2>
                <form action="{{ url('/personalstore') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="education-container">
                        <div class="form_container">
                            <div class="input_wrap">
                                <label class="details">Education Name</label>
                                <input type="text" name="education[0][Company_name]"
                                    placeholder="Enter your institution" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Institution Location</label>
                                <input type="text" name="education[0][Loc_edu]"
                                    placeholder="Enter your institution location" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Education Level</label>
                                <input type="text" name="education[0][Education_level]"
                                    placeholder="Enter your education level" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Start Date</label>
                                <input type="date" name="education[0][Start_date_edu]"
                                    placeholder="Enter your education start date" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">End Date</label>
                                <input type="date" name="education[0][End_date_edu]"
                                    placeholder="Enter your education start date" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Achievement</label>
                                <input type="text" name="education[0][Achievment]"
                                    placeholder="Enter your achievement" required>
                            </div>
                            <button type="button" class="btn btn-danger remove-education"
                                style="display:none;">Hapus</button>
                        </div>
                    </div>
                    <button type="button" id="add-education" class="btn btn-success">Tambah Pendidikan</button>


                </form>
            </div>
            <div class="form_3 data_info" style="display: none;">
                <h2>Experience</h2>
                <form action="{{ url('/personalstore') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="experience-container">
                        <div class="form_container">
                            <div class="input_wrap">
                                <label class="details">Organization Name</label>
                                <input type="text" name="experience[0][Company_name]"
                                    placeholder="Enter your organization" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Organization Location</label>
                                <input type="text" name="experience[0][Loc_org]"
                                    placeholder="Enter your organization location" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Start Date</label>
                                <input type="date" name="experience[0][Start_date_org]"
                                    placeholder="Enter your organization start date" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">End Date</label>
                                <input type="date" name="experience[0][End_date_org]"
                                    placeholder="Enter your organization start date" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Job Title</label>
                                <input type="text" name="experience[0][Job_title]"
                                    placeholder="Enter your job title" required>
                            </div>

                            <div class="input_wrap">
                                <label class="details">Job Description</label>
                                <input type="text" name="experience[0][Job_desc]"
                                    placeholder="Enter your job description" required>
                            </div>
                        </div>


                    </div>
                    <button type="button" id="add-experience" class="btn btn-success">Tambah Experience</button>
            </div>
            </form>
        </div>
    </div>
    <div class="btns_wrap">
        <div class="common_btns form_1_btns">
            <button type="button" class="btn_next">Next <span class="icon"><ion-icon
                        name="arrow-forward-sharp"></ion-icon></span></button>
        </div>
        <div class="common_btns form_2_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon
                        name="arrow-back-sharp"></ion-icon></span>Back</button>
            <button type="button" class="btn_next">Next <span class="icon"><ion-icon
                        name="arrow-forward-sharp"></ion-icon></span></button>
        </div>
        <div class="common_btns form_3_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon
                        name="arrow-back-sharp"></ion-icon></span>Back</button>
            <button type="submit" class="btn_done">Done</button>
        </div>
    </div>
    </div>

    <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrap">
            <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
            <p>You have successfully completed the process.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const educationContainer = document.getElementById('education-container');
            const addEducationButton = document.getElementById('add-education');
            const experienceContainer = document.getElementById('experience-container');
            const addExperienceButton = document.getElementById('add-experience');

            let educationCount = 0; // Mulai dari 0 karena kita akan menyesuaikan indeks saat menambahkan formulir
            let experienceCount = 0; // Mulai dari 0 karena kita akan menyesuaikan indeks saat menambahkan formulir

            addEducationButton.addEventListener('click', function() {
                const newEducationForm = document.querySelector('.education-form').cloneNode(true);

                // Reset nilai untuk setiap elemen input
                newEducationForm.querySelectorAll('input, select').forEach((input) => {
                    input.value = '';
                });

                // Tambahkan indeks dinamis ke dalam nama elemen dan tambahkan data-index
                educationCount++;
                newEducationForm.querySelectorAll('[name]').forEach((input) => {
                    input.name = input.name.replace('education[0]', `education[${educationCount}]`);
                });

                newEducationForm.querySelector('.remove-education').style.display =
                    'inline-block'; // Tampilkan tombol hapus
                educationContainer.appendChild(newEducationForm);
            });

            addExperienceButton.addEventListener('click', function() {
                const newExperienceForm = document.querySelector('.experience-form').cloneNode(true);

                // Reset nilai untuk setiap elemen input
                newExperienceForm.querySelectorAll('input, select').forEach((input) => {
                    input.value = '';
                });

                // Tambahkan indeks dinamis ke dalam nama elemen dan tambahkan data-index
                experienceCount++;
                newExperienceForm.querySelectorAll('[name]').forEach((input) => {
                    input.name = input.name.replace('experience[0]',
                        `experience[${experienceCount}]`);
                });

                newExperienceForm.querySelector('.remove-experience').style.display =
                    'inline-block'; // Tampilkan tombol hapus
                experienceContainer.appendChild(newExperienceForm);
            });

            educationContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-education')) {
                    const removedIndex = event.target.closest('.education-form').getAttribute('data-index');
                    const educationId = event.target.getAttribute('data-education-id');

                    event.target.closest('.education-form').remove();

                    // Menyesuaikan indeks formulir setelah menghapus formulir
                    document.querySelectorAll('.education-form').forEach((form, index) => {
                        const currentIndex = parseInt(form.getAttribute('data-index'), 10);
                        if (currentIndex > removedIndex) {
                            const newIndex = currentIndex - 1;
                            form.querySelectorAll('[name]').forEach((input) => {
                                input.name = input.name.replace(
                                    `education[${currentIndex}]`,
                                    `education[${newIndex}]`);
                            });
                        }
                    });

                    educationCount--; // Kurangi jumlah formulir pendidikan setelah menghapus formulir
                }
            });

            experienceContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-experience')) {
                    const removedIndex = event.target.closest('.experience-form').getAttribute(
                        'data-index');
                    const experienceId = event.target.getAttribute('data-experience-id');

                    event.target.closest('.experience-form').remove();

                    // Menyesuaikan indeks formulir setelah menghapus formulir
                    document.querySelectorAll('.experience-form').forEach((form, index) => {
                        const currentIndex = parseInt(form.getAttribute('data-index'), 10);
                        if (currentIndex > removedIndex) {
                            const newIndex = currentIndex - 1;
                            form.querySelectorAll('[name]').forEach((input) => {
                                input.name = input.name.replace(
                                    `experience[${currentIndex}]`,
                                    `experience[${newIndex}]`);
                            });
                        }
                    });

                    experienceCount--; // Kurangi jumlah formulir pendidikan setelah menghapus formulir
                }
            });

        });

        var form_1 = document.querySelector(".form_1");
        var form_2 = document.querySelector(".form_2");
        var form_3 = document.querySelector(".form_3");

        var form_1_btns = document.querySelector(".form_1_btns");
        var form_2_btns = document.querySelector(".form_2_btns");
        var form_3_btns = document.querySelector(".form_3_btns");

        var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
        var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
        var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
        var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");

        var form_2_progessbar = document.querySelector(".form_2_progessbar");
        var form_3_progessbar = document.querySelector(".form_3_progessbar");

        var btn_done = document.querySelector(".btn_done");
        var modal_wrapper = document.querySelector(".modal_wrapper");
        var shadow = document.querySelector(".shadow");

        form_1_next_btn.addEventListener("click", function() {
            form_1.style.display = "none";
            form_2.style.display = "block";

            form_1_btns.style.display = "none";
            form_2_btns.style.display = "flex";

            form_2_progessbar.classList.add("active");
        });

        form_2_back_btn.addEventListener("click", function() {
            form_1.style.display = "block";
            form_2.style.display = "none";

            form_1_btns.style.display = "flex";
            form_2_btns.style.display = "none";

            form_2_progessbar.classList.remove("active");
        });

        form_2_next_btn.addEventListener("click", function() {
            form_2.style.display = "none";
            form_3.style.display = "block";

            form_3_btns.style.display = "flex";
            form_2_btns.style.display = "none";

            form_3_progessbar.classList.add("active");
        });

        form_3_back_btn.addEventListener("click", function() {
            form_2.style.display = "block";
            form_3.style.display = "none";

            form_3_btns.style.display = "none";
            form_2_btns.style.display = "flex";

            form_3_progessbar.classList.remove("active");
        });

        // Added event listeners for clicking on progress bar steps
        document.querySelector(".form_1_progessbar").addEventListener("click", function() {
            form_1.style.display = "block";
            form_2.style.display = "none";
            form_3.style.display = "none";

            form_1_btns.style.display = "flex";
            form_2_btns.style.display = "none";
            form_3_btns.style.display = "none";

            form_2_progessbar.classList.remove("active");
            form_3_progessbar.classList.remove("active");
        });

        document.querySelector(".form_2_progessbar").addEventListener("click", function() {
            form_1.style.display = "none";
            form_2.style.display = "block";
            form_3.style.display = "none";

            form_1_btns.style.display = "flex";
            form_2_btns.style.display = "none";
            form_3_btns.style.display = "none";

            form_2_progessbar.classList.add("active");
            form_3_progessbar.classList.remove("active");
        });

        document.querySelector(".form_3_progessbar").addEventListener("click", function() {
            form_1.style.display = "none";
            form_2.style.display = "none";
            form_3.style.display = "block";

            form_1_btns.style.display = "none";
            form_2_btns.style.display = "none";
            form_3_btns.style.display = "flex";

            form_2_progessbar.classList.add("active");
            form_3_progessbar.classList.add("active");
        });

        btn_done.addEventListener("click", function() {
            modal_wrapper.classList.add("active");
        });

        shadow.addEventListener("click", function() {
            modal_wrapper.classList.remove("active");
        });
    </script>


</body>

</html>
