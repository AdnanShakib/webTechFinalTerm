<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtech";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	 // echo "Successful connection";
//  $q = "UPDATE student set Email = 'rakib1998@gmail.com' where id = '1003'";
//  $conn->query($q);
	$w="SELECT * from student";
  $result = $conn->query($w);
  if($result->num_rows>0)
  {
    while($rows=$result->fetch_assoc())
    {

          ?>
          <table cellspacing='3'>
              <tr >
                  <td>
                      <?php echo "ID";?>
                  </td>
                  <td>
                      <?php echo "NAME";?>
                  </td>
                  <td>
                      <?php echo "EMAIl" ;?>
                  </td>
              </tr>
              <tr>
                  <td>
                      <?php echo $rows["Id"] ;?>
                  </td>
                  <td>
                      <?php echo $rows["Name"] ;?>
                  </td>
                  <td>
                      <?php echo $rows["Email"] ;?>
                  </td>
              </tr>
          </table>
          <?php
      }
  }


}
?>
