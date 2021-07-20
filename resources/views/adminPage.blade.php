<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin with love</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link rel="stylesheet" href="css/admin.css">
</head>

<script>
    function openLink(evt, animName) {
        var i, x;
        x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(animName).style.display = "block";
    }
</script>

<body>
    <div class="admin_container" id="admin_body-pd">
        <div class="admin_header" id="admin_header">
            <div class="admin_header_toggle">
                <i class="bx bx-menu" id="admin_header-toggle"></i>
            </div>
            <div class="admin_header_title">Admin page</div>
            <div class="admin_header_img">
                <img src="https://i.pinimg.com/originals/60/10/4a/60104a06b2c5da9e7ab683b3d6cfdd15.jpg" alt="" />
            </div>
        </div>
        <div class="admin_l-navbar" id="admin_nav-bar">
            <nav class="admin_nav">
                <div>
                    <a href="#" class="admin_nav_logo">
                        <i class="bx bx-layer admin_nav_logo-icon"></i>
                        <span class="admin_nav_logo-name">User Interface</span>
                    </a>
                    <div class="nav_list">
                        <a href="#" onclick="openLink(event, 'dashboard')" class="admin_nav_link admin_active">
                            <i class="bx bx-grid-alt admin_nav_icon"></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'users')" class="admin_nav_link">
                            <i class="bx bx-user admin_nav_icon"></i>
                            <span class="nav_name">Users</span>
                        </a>

                        <a href="#" onclick="openLink(event, 'gallery')" class="admin_nav_link">
                            <i class="bx bx-image admin_nav_icon"></i>
                            <span class="nav_name">Gallery</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'news')" class="admin_nav_link">
                            <i class="bx bx-news admin_nav_icon"></i>
                            <span class="nav_name">News</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'event')" class="admin_nav_link">
                            <i class="bx bx-calendar-event admin_nav_icon"></i>
                            <span class="nav_name">Event</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'achievement')" class="admin_nav_link">
                            <i class="bx bx-code-block admin_nav_icon"></i>
                            <span class="nav_name">Achievement</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'partner')" class="admin_nav_link">
                            <i class="bx bx-building-house admin_nav_icon"></i>
                            <span class="nav_name">Partner</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'banner')" class="admin_nav_link">
                            <i class="bx bx-movie-play admin_nav_icon"></i>
                            <span class="nav_name">Banner</span>
                        </a>
                        <a href="#" onclick="openLink(event, 'files')" class="admin_nav_link">
                            <i class="bx bx-folder admin_nav_icon"></i>
                            <span class="nav_name">Files</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="admin_nav_link">
                    <i class="bx bx-log-out admin_nav_icon"></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="admin_height-100 bg-light">
            <div id="dashboard" class="tab w3-animate-right">
                <h2>Slide in from dashboard</h2>
            </div>
            <div id="users" class="tab w3-animate-right" style="display: none">
                <nav class="admin_tab_title">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#visited"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            Visited
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#contacted"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            Contacted
                        </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            Donated
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active admin_tab_box" id="visited" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <table class="admin_table">
                            <tr class="admin_table_header">
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Created at</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>le son nam</td>
                                <td>nam.le22@student.passerellesnumeriques.org</td>
                                <td>0386005775</td>
                                <td>101b-le huu trac-son tra-da nang</td>
                                <td>2021-18-7 11:55:00</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade admin_tab_box" id="contacted" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        contacted
                    </div>
                    <div class="tab-pane fade admin_tab_box" id="donated" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        Donated
                    </div>
                </div>
            </div>
            <div id="gallery" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from gallery</h2>
            </div>
            <div id="news" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from news</h2>
            </div>
            <div id="event" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from event</h2>
            </div>
            <div id="achievement" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from achievement</h2>
            </div>
            <div id="partner" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from partner</h2>
            </div>
            <div id="banner" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from banner</h2>
            </div>
            <div id="files" class="tab w3-animate-right" style="display: none">
                <h2>Slide in from files</h2>
            </div>
        </div>
    </div>

    <!--Container Main end-->
</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId);

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener("click", () => {
                    // show navbar
                    nav.classList.toggle("admin_show");
                    // change icon
                    toggle.classList.toggle("bx-x");
                    // add padding to body
                    bodypd.classList.toggle("admin_container-pd");
                    // add padding to header
                    headerpd.classList.toggle("admin_header-pd");
                });
            }
        };

        showNavbar(
            "admin_header-toggle",
            "admin_nav-bar",
            "admin_body-pd",
            "admin_header"
        );

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll(".admin_nav_link");

        function colorLink() {
            if (linkColor) {
                linkColor.forEach((l) => l.classList.remove("admin_active"));
                this.classList.add("admin_active");
            }
        }
        linkColor.forEach((l) => l.addEventListener("click", colorLink));

        // Your code to run since DOM is loaded and ready
    });
</script>

</html>
