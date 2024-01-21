<!DOCTYPE html>
<html>
  <body>

    <h1>Program-13: Write a function in PHP to generate captcha code</h1>

    <?php
      // Function to generate a random captcha code
      function generateCaptcha($length = 6) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $captcha = '';

        $charLength = strlen($characters);

        // Generate Random characters for the captcha
        for ($i = 0; $i < $length; $i++) {
          $captcha .= $characters[rand(0, $charLength - 1)];
        }

        // Start the session if not already started
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }

        // Store the captcha code in session (for validation)
        $_SESSION['captcha'] = $captcha;

        return $captcha;
      }

      // Usage example
      // Start the session if not already started
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      // Generate a 6-character captcha code
      $captchaCode = generateCaptcha();

      // Output the captcha code as text or in an HTML element
      echo "Generated Captcha: $captchaCode";
    ?>

  </body>
</html>
