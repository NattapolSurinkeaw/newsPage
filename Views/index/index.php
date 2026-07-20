<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<div class="container">
    <h1>LetGo1</h1>
    <div style="display: flex">
        <div style="background-color: #f1f1f1; padding: 10px; width: 200px;">
            <h3>Sidebar</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>

            
        </div>
        <div style="flex: 1; padding: 10px;">
            <h2>Main Content</h2>
            <p>This is the main content area.</p>

            
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
