<?php
    require('config/db.php');
    
    $query = 'SELECT * FROM posts';

    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free Result
    mysqli_free_result($result);

    mysqli_close($conn);
?>


<?php include('inc/header.php'); ?>
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
    <div class="container">
        <h3><?php echo $post['title']; ?></h3>
        <small>Created on <?php echo $post['created_at']; ?> by
        <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <?php endforeach; ?>
    </div>
<?php include('inc/footer.php'); ?>