<?php include 'template/header.php'; ?>

<?php
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM table_board WHERE board_member_id= '$userId'";
    $query = $conn->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container">
    <h1>My Board</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic</th>
      <th scope="col">Date</th>
      <th scope="col">Option</th>
      
    </tr>
    </thead>

    <tbody>
    <?php foreach($result as $key => $value): ?>
        <tr>
        <th scope="row"><?php echo $key+1 ?></th>
        <td><a href="board.php?boardId=<?php echo $value['board_id']; ?>"><?php echo $value['board_topic'];?></a></td>

        <td><?php echo $value['board_date']; ?></td>
        <td><a href="#">Edit</a>|<a href="#">Delete</a></td> 
        </tr>
    <?php endforeach; ?>
    </table>
  <tbody>
</div>

<?php include 'template/footer.php'; ?>