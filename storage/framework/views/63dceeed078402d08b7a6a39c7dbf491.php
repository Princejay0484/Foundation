<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <link rel="stylesheet" href="/css/loading.css"/>
    <title>BYSMP | Bless The Children Foundation</title>
</head>
<body>
    <div class="loading-text">Loading, please wait...</div>
    <div class="progress-container">
        <div class="progress-bar" id="progress-bar">0%</div>
    </div>

    <script>
        let progress = 0;
        const progressBar = document.getElementById("progress-bar");

        function updateProgress() {
            if (progress < 100) {
                progress += 1;
                progressBar.style.width = progress + "%";
                progressBar.innerText = progress + "%";
                setTimeout(updateProgress, 50);
            } else {
                window.location.href = "/admin_dasboard";
            }
        }
        
        updateProgress();
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/dasboard_admin.blade.php ENDPATH**/ ?>