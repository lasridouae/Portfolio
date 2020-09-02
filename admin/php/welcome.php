<h2>User Messages & Querys</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
$sql = "SELECT * from `contact`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) :?>
          <tr>
              
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['email']?></td>
              <td><?php echo $row['message']?></td>
            </tr>
            <?php endwhile; ?>
          <td colspan="5" align="center"> Currenty There Is No Messages or Queries !</td>
         
              
          </tbody>
        </table>
      </div>