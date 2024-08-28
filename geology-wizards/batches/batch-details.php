<?php
  // Header
  include 'header.php';

  // Content
  ?>
  <h1>Batch Details</h1>
  <p>View details for the <?php echo $_GET['batch']; ?> batch:</p>
  <ul>
    <li><a href="recorded-videos/upload-video.php?batch=<?php echo $_GET['batch']; ?>">Upload Video</a></li>
    <li><a href="tests-quizzes/create-test.php?batch=<?php echo $_GET['batch']; ?>">Create Test</a></li>
    <li><a href="courses/add-course.php?batch=<?php echo $_GET['batch']; ?>">Add Course</a></li>
    <li><a href="courses/course-list.php?batch=<?php echo $_GET['batch']; ?>">View Courses</a></li>
  </ul>

  // Footer
  <?php include 'footer.php'; ?>
