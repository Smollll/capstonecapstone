<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Inter', sans-serif;
    }

    body {
        background: linear-gradient(to bottom, #FFE08F, #DEC4AC);
        background-repeat: no-repeat;
        background-attachment: fixed;
        overflow-x: hidden;
    }

    nav {
        background-color: #000;
        width: 100%;
    }

    nav ul {
        color: white;
        list-style: none;
        margin: 0;
        padding: 1%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    nav ul li {
        margin-right: 1rem;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-size: 1rem;
    }

    .np {
        margin-left: auto;
    }

    .wrapper {
        position: relative;
        text-align: right;
    }

    input {
        opacity: 0;
        pointer-events: none;
    }

    .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: white;
        border: 1px solid black;
        border-radius: 7px;
        width: 100%;
        max-width: 250px;
        height: 270px;
        flex-direction: column;
    }

    input:checked ~ .dropdown {
        display: flex;
    }

    .dropdown a {
        color: #000;
        text-decoration: none;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .dropdown a box-icon {
        margin-right: 10px;
        display: inline-flex;
        align-items: center;
    }

    img {
        height: 30px;
        width: 30px;
        border-radius: 50%;
    }

    .notification-box {
        display: none;
        position: absolute;
        top: 56px;
        right: 140px;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px;
        max-width: 300px;
        width: 100%;
        z-index: 1000;
        height: 300px;
        overflow-y: auto;
    }

    .notification-box.show {
        display: block;
    }

    .notification-count {
        position: absolute;
        top: -1px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 5px;
        font-size: 12px;
    }

    .notification-item {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    .notification-item small {
        color: #888;
    }

    .container {
        background-color: white;
        height: 300px;
        width: calc(100% - 3rem);
        max-width: 241px;
        border-radius: 5%;
        margin: 1.5%;
        box-shadow: 0 4px 7px rgba(0.5,0.5,0.5,0.5);
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 1rem;
        float: left;
        margin-left:20px;
    }

    .probox {
        background-color: white;
        height: 200px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        position: relative;
    }

    .ins {
        background-color: black;
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }

    .view-button, .enroll-button {
        background-color: #3c6382;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1rem;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
    }

    .view-button:hover, .enroll-button:hover {
        background-color: #60a3bc;
        color: black;
    }

    .enroll-button {
        background-color: #4CAF50; 
        margin-top: auto;
        width: 100%;
    }

    .enroll-button:hover {
        background-color: #45a049;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.4);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 5px;
        overflow-y: hidden;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover, .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .course-title {
        font-size: 1.25rem;
        margin-top: 2rem;
    }

    .course-instructor {
        font-size: 1rem;
        margin-top: -0.5rem;
    }

    .modal-title {
        font-size: 1.25rem;
        margin-top: 1.5rem;
    }

    .modP {
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        nav ul {
            flex-direction: column;
            align-items: flex-start;
        }

        .np {
            margin-left: 0;
        }

        .dropdown {
            width: 100%;
            max-width: none;
            right: 0;
        }

        .container {
            width: calc(100% - 2rem);
        }
    }

    @media (max-width: 480px) {
        .view-button, .enroll-button {
            padding: 5px 10px;
            font-size: 0.875rem;
        }

        .enroll-button {
            font-size: 1rem;
        }
    }
</style>

     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#cart">Cart</a></li>
            <li><a href="#transaction">Transaction</a></li>
            <li class="np">
                <a href="#notification" id="notification-bell">
                    <box-icon type='solid' name='bell' color='white'></box-icon>
                    <span class="notification-count">0</span>
                </a>
                <div class="notification-box" id="notification-box">
                    <div id="notificationContainer"></div>
                </div>
            </li>
            <li class="wrapper">
                <input id="toggler" type="checkbox">
                <label for="toggler">
                    <img src="pric.png" alt="Profile">
                </label>
                <div class="dropdown">
                    <a href="#">Name</a>
                    <br>
                    <hr style="width: 240px;">
                    <br>
                    <a href="#"><box-icon name='lock'></box-icon> Privacy and Security</a>
                    <br>
                    <a href="#"><box-icon name='globe' color='black'></box-icon> Language</a>
                    <br>
                    <a href="#"><box-icon type='solid' name='user-detail'></box-icon> Apply as Instructor</a>
                </div>
            </li>
        </ul>
    </nav>
<h1 style="text-align: left;">Recommended Courses</h1>

    <div>
        <div class="courses-container">
            
        </div>
    </div>

    <div class="probox">
        <div class="ins">
            <!-- Recommended instructors will go here -->
        </div> 
    </div>   

<h1 style="text-align: left;">More Courses</h1>

    <div>
        <div class="courses-container">
            <!-- Courses will be loaded here -->
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 class="modal-title" id="modalTitle"></h3>
            <p class="modP" id="modalDescription"></p>
            <p class="modP" id="modalInstructor"></p>
            <p class="modP" id="modalLessons"></p>
           <button class="enroll-button">Enroll</button>
            
        </div>
    </div>
    <script>
        function showNotifications(event) {
            event.preventDefault();
            console.log('Notification bell clicked');
            const notificationBox = document.getElementById('notification-box');
            notificationBox.classList.toggle('show');
        }

        document.getElementById('notification-bell').addEventListener('click', showNotifications);

$(document).ready(function() {
    function fetchCourses() {
        $.ajax({
            url: 'courses.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const coursesContainer = $('.courses-container');
                coursesContainer.empty(); // Clear existing content

                data.forEach(function(course) {
                    const courseDiv = $('<div class="container"></div>');
                    courseDiv.append('<h3 class="course-title">' + course.coursename + '</h3>');
                    courseDiv.append('<p class="course-instructor"><strong>Instructor:</strong> ' + course.instructor + '</p>');

                    const enrollButton = $('<button class="view-button">View More</button>');
                    enrollButton.click(function() {
                        $('#modalTitle').text(course.coursename);
                        $('#modalDescription').text('Description: ' + course.description);
                        $('#modalInstructor').text('Instructor: ' + course.instructor);
                        $('#modalLessons').text('Lessons: ' + course.lessons);
                        $('body').addClass('no-scroll');
                        $('#myModal').show();
                    });
                    courseDiv.append(enrollButton);
                    coursesContainer.append(courseDiv);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching courses:', error);
            }
        });
    }


    fetchCourses();

    setInterval(fetchCourses, 1000);

    const modal = document.getElementById("myModal");
    const span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
        $('body').removeClass('no-scroll');
    }

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
            $('body').removeClass('no-scroll');
        }
    }

    function showNotifications(event) {
        event.preventDefault();
        const notificationBox = document.getElementById('notification-box');
        notificationBox.classList.toggle('show');
    }

    function updateNotification() {
        fetch('notification.php')
            .then(response => response.text())
            .then(data => {
                const notificationContainer = document.getElementById('notificationContainer');
                const newNotification = document.createElement('div');
                newNotification.className = 'notification-item';
                newNotification.innerHTML = data;
                notificationContainer.appendChild(newNotification);

                // Update notification count
                const notificationCount = document.querySelector('.notification-count');
                const currentCount = parseInt(notificationCount.textContent);
                notificationCount.textContent = currentCount + 1;
            })
            .catch(error => console.error('Error:', error));
    }

    // Update the notification every 100 seconds
    setInterval(updateNotification, 100000);

    // Initial update
    updateNotification();
});


    </script>
</body>
</html>
