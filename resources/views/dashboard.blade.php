<style>
    /* Base styles */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

/* Header styles */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background-color: #f5f5f5;
}

.header__title {
  font-size: 1.25rem;
  font-weight: bold;
  color: #333;
}

.header__link {
  text-decoration: none;
  color: #333;
}

/* Content styles */
.content {
  padding: 2rem;
}

.content__container {
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  padding: 1rem;
}

.content__text {
  color: #333;
}

/* Dark mode styles (optional) */
/* Add these styles if you want to support a dark mode */
.dark {
  background-color: #222;
  color: #fff;
}

.dark .header__title,
.dark .header__link,
.dark .content__text {
  color: #fff;
}

.dark .content__container {
  background-color: #333;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="header">
    <h2 class="header__title">Dashboard</h2>
    <a href="{{route('pages.register')}}" class="header__link">Click to proceed</a>
  </header>
  <main class="content">
    <div class="content__container">
      <p class="content__text">Welcome, {{ Auth::user()->name }}!</p>
    </div>
  </main>
</body>
</html>

