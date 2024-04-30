<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Athena Ozanich's Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Online registration form, HTML, CSS, Mobile First">
  {{-- <link rel="stylesheet" href="/css/normalize.css"> --}}
  <link rel="stylesheet" href="/css/treatment2.css">
</head>
  <body>

    <!--Header section-->

    <header>
      <h1>The Code Review</h1>
    </header>

    <main>

      <section>
        <h2>Sign up for our news letter</h2>
        <p>Get the latest news on how your code is doing right in your inbox</p>
      </section>

      <!--Main body of form-->
      <form class="gform" action="https://script.google.com/macros/s/AKfycbzVXiKwtEi89ZtOC0Ez_UiPmzDeLlYLqetn4EiDJWHjhXs25Kw/exec" method="POST">
        <!--Contact section of the form-->
      <div class="form-elements">
        <fieldset>
          <legend><h2>Contact Information</h2></legend>

          <label for="name">Pateint ID</label>
          <input id="name" aria-label="name" type="text" name="name" placeholder="This field is required" required>

          <label for="email">Dosage</label>
          <input id="email" aria-label="email" type="text" name="dosage" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="This field is required" required>

          <label for="phone-number">Tab</label>
          <input id="phone-number" aria-label="phone-number" type="tel" name="tab" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="xxx-xxx-xxxx" placeholder="(xxx)xxx-xxxx">

          <label for="address">Gutt</label>
          <input id="address" aria-label="address" type="text" name="gutt" placeholder="1234 Elm Street">

          <label for="city">O.C</label>
          <input id="city" aria-label="city" type="text" name="city" placeholder="Haven">

          <label for="city">S.U.R</label>
          <input id="city" aria-label="city" type="text" name="city" placeholder="Haven">
          <label for="city">R.T.C</label>
          <input id="city" aria-label="city" type="text" name="city" placeholder="Haven">

          <!--Select and its corresponding options and label-->

          <label for="state">Duration</label>
          <select id="state" aria-label="state" name="state">
            <option value="" disabled selected >Choose State</option>
            <option>1 Day</option>
            <option>2 Days</option>
            <option>3 Days</option>
            <option>4 Days</option>
            <option>5 Days</option>
            <option>6 Days</option>
            <option>1 week</option>
            <option>2 weeks</option>
            <option>3 weeks</option>
            <option>4 weeks</option>
          </select>

          <label for="postal-code">Postal Code</label>
          <input id="postal-code" aria-label="postal-code" type="text" name="postal-code" placeholder="xxxxx">
        </fieldset>


      <!--Newsletter section of the form.-->


        <fieldset id="newsletter">
          <legend><h2>Newsletter</h2></legend>
          <p>Select the newsletters you would like to recieve.</p>

          <!--Checkboxes-->
          <h2>single Vision Tintable</h2>

          <input id="html" aria-label="html" type="checkbox" name="html">
          <label for="html">Single Vision Tintable Photochromic</label>

          <input id="css" aria-label="css" type="checkbox" name="css">
          <label for="css">Single Vision Transition A/R</label>

          <input id="jscript" aria-label="jscript" type="checkbox" name="javascript">
          <label for="jscript">Single Vision Transition A/R B/C</label>

          <h2>Bifocal Transition</h2>
          
          <input id="html" aria-label="html" type="checkbox" name="html">
          <label for="html">Single Vision Tintable Photochromic</label>

          <input id="css" aria-label="css" type="checkbox" name="css">
          <label for="css">Single Vision Transition A/R</label>

          <input id="jscript" aria-label="jscript" type="checkbox" name="javascript">
          <label for="jscript">Single Vision Transition A/R B/C</label>

          

          <!--Radio buttons-->

          <input id="html-format" aria-label="html-format" type="radio" name="format-choice" value="html">
          <label for="html-format">Html</label>

          <input id="plain-text" aria-label="plain-text" type="radio" name="format-choice" value="plain-text">
          <label for="plain-text">Plain Text</label>

          <p>Other topics you'd like to hear about.</p>

          <!--Textarea and label-->

          <label for="message"></label>
          <textarea id="message" aria-label="message" name="message" placeholder="Type your messaage here."></textarea>
        </fieldset>
        <button type="submit">Submit</button>
      </div class="form-elements">
      </form>

      <!--End form-->

    </main>

    <footer>
      <p>Copyright The Code Review</p>
    </footer>
    <script data-cfasync="false" type="text/javascript" src="js/form-submission-handler.js"></script>
  </body>

</html>