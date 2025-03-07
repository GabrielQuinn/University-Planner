<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Planner</title>
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/main.css">
    <script src="https://kit.fontawesome.com/0ec9018faa.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div>
            <span>
                <h1>University Planner</h1>
                <h2>Created by Gabriel Quinn</h2>
            </span>
            <i class="fa-solid fa-graduation-cap fa-3x"></i>
        </div>
        <div>
            <button><a href="#">Profile</a></button>
            <button><a href="#">Sign Up</a></button>
        </div>
    </header>
    <section class="current-term">
        <h3>Current Term</h3>
        <ul class="course-list">
            <li>
                <span class="course-title">COIS-1000</span>
                <span  class="term-grade">Avg: X%</span>
                <span>
                    <select name="state" id="state">
                        <option value="not-registered">Not Registered</option>
                        <option value="registered">Registered</option>
                        <option value="passed">Passed</option>
                    </select>
                </span>
            </li>
            <li>
                <span class="course-title">COIS-1000</span>
                <span class="term-grade">Avg: X%</span>
                <span>
                    <select name="state" id="state">
                        <option value="not-registered">Not Registered</option>
                        <option value="registered">Registered</option>
                        <option value="passed">Passed</option>
                    </select>
                </span>
            </li>
            <li>
                <span class="course-title">COIS-1000</span>
                <span class="term-grade">Avg: X%</span>
                <span>
                    <select name="state" id="state">
                        <option value="not-registered">Not Registered</option>
                        <option value="registered">Registered</option>
                        <option value="passed">Passed</option>
                    </select>
                </span>
            </li>
        </ul>
        <div class="container">
            <button>Previous Term</button>
            <button><i class="fa-solid fa-pen-to-square fa-2x"></i></button>
            <button>Next Term</button>
        </div>
    </section>
    <section class="requirements">
        <h3>Degree Requirements</h3>
        <ul>
            <li>
                <span class="course-title">COIS-1000</span>
                <span>2.0 Credits</span>
                <button><i class="fa-solid fa-check"></i></button>
            </li>
            <li>
                <span class="course-title">COIS-1000</span>
                <span>2.0 Credits</span>
                <button><i class="fa-solid fa-check"></i></button>
            </li>
        </ul>
        <span>
            <button><i class="fa-solid fa-pen-to-square fa-2x"></i></button>
        </span>
    </section>
    <section class="plan">
        <h3>Full Plan</h3>
        <span><button><a href="#">View Full Plan</a></button></span>
    </section>
</body>
</html>