<?php include 'inc/header.php'; ?>

    <?php
      $sql = 'SELECT * from feedback';
      $result = mysqli_query($conn, $sql);
      $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);



    //   $feedback = [
    //   [
    //     'id' => '1',
    //     'name' => 'Beth Williams',
    //     'email' => 'beth@gmail.com',
    //     'body' => 'Web Programming was not okay'
    //   ],
    //   [
    //     'id' => '2',
    //     'name' => 'Walt Williams',
    //     'email' => 'walt@gmail.com',
    //     'body' => 'Web Programming was not okay'
    //   ],
    //   [
    //     'id' => '3',
    //     'name' => 'Bill Williams',
    //     'email' => 'bill@gmail.com',
    //     'body' => 'Is this Web Programming?'
    //   ],
    // ];
    ?>
   
    <h2>Past Feedback</h2>
    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feeback for you</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
          By <?php echo $item['name']; ?>
          using <?php echo $item['email']; ?>

          on <?php echo $item['date']; ?>
        </div>
     </div>
   </div>
   <?php endforeach; ?>
   </div>
<?php include 'inc/footer.php'; ?>