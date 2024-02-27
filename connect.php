<style>
  .dbresult,.dbresult td,.dbresult th{
    border:1px solid black;
    border-collapse:collapse;
    padding:8px;
  }
  .dbresult{
    width:800px;
    height: auto;
  }
  .dbresult tr:nth-child(odd){
     background-color:"b2d0d6";
  }
  .dbresult tr:nth-child(even){
    background-color:lightcyan;
  }
  </style>
<?php
 $link= mysqli_connect('localhost','root','','programsix');
 if(!$link)
 {
  die('Connection error'.mysqli_connect_error());
 } 
 $query="select * from 10mark";
 $result=mysqli_query($link,$query);
 $numrow=mysqli_num_rows($result);
 if($numrow>0)
 {
  echo'<table class="dbresult">';
  echo'<tr>';
  echo'<th>S.NO</th>';
  echo'<th>Question1</th>';
  echo'<th>Question2</th>';
  echo'<th>Question3</th>';
  echo'<th>Question4</th>';
  echo'<th>Question5</th>';
  echo'</tr>';
  while ($row=mysqli_fetch_assoc($result))
  {
    echo'<tr>';
    echo'<td>'.$row['S.NO'].'</td>';
    echo'<td>'.$row['Question1'].'</td>';
    echo'<td>'.$row['Question2'].'</td>';
    echo'<td>'.$row['Question3'].'</td>';
    echo'<td>'.$row['Question4'].'</td>';
    echo'<td>'.$row['Question5'].'</td>';
    echo'</tr>';
  }
  echo'</table>';
}
else{
echo'Record Not Found';
}
?>