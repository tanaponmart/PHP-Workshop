<?php include 'template/header.php' ; ?>
<?php 
    $sql = "SELECT * FROM table_board";
    $query = $conn->query($sql);
    $results = $query->fetchall(PDO::FETCH_ASSOC);
    
?>
<div class="container">
<h1>Home page.</h1>
    <h2>
    Hello_<?php echo $_SESSION['username'];?>
    </h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($results  as $key =>$value): ?>
  <tr>
    <th scope="row"><?php echo $key+1 ?></th>
    <td><a href ="board.php?boardId=<?php echo $value['board_id']; ?>"><?php echo $value['board_topic']; ?></td>
    <td><?php echo $value['board_date']; ?></td>
    
  </tr>
<?php endforeach; ?>
    
  </tbody>
</table>
<?php include 'template/footer.php' ; ?>
