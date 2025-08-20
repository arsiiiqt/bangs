<?php
// You can modularize header/footer later. This is all-in-one for now.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
        }
        .hero {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: center;
        }
        .project-card {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">MyPortfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1>Hello, I'm [Your Name]</h1>
    <p class="lead">A passionate web developer and designer</p>
  </div>
</section>

<!-- About Section -->
<section id="about" class="container my-5">
  <h2>About Me</h2>
  <p>Hello! I'm a web developer with experience in PHP, JavaScript, and front-end technologies. I love creating interactive and user-friendly websites.</p>
</section>

<!-- Projects Section -->
<section id="projects" class="container my-5">
  <h2>Projects</h2>
  <div class="row">
    <div class="col-md-4 project-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Project One</h5>
          <p class="card-text">Description of your project goes here.</p>
          <a href="#" class="btn btn-primary">View Project</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 project-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Project Two</h5>
          <p class="card-text">Another cool project.</p>
          <a href="#" class="btn btn-primary">View Project</a>
        </div>
      </div>
    </div>
    <!-- Add more project cards as needed -->
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="container my-5">
  <h2>Skills</h2>
  <ul>
    <li>PHP</li>
    <li>JavaScript</li>
    <li>HTML/CSS</li>
    <li>Bootstrap</li>
    <li>MySQL</li>
  </ul>
</section>

<!-- Contact Section -->
<section id="contact" class="container my-5">
  <h2>Contact Me</h2>
  <form action="mailto:your@email.com" method="post" enctype="text/plain">
    <div class="mb-3">
      <label for="name" class="form-label">Your Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Your Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message:</label>
      <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  &copy; <?php echo date("Y"); ?> Your Name. All rights reserved.
</footer>

<!-- Boo
