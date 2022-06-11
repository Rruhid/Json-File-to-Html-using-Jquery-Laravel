
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
 
</head>
<body>

    <div class="row">
<div class="col-sm-2">
  
  
<button onclick="history.back()">Go Back</button>
</div>


<style>
  
  
  .clickable{

    cursor:pointer;
    background:rgb(189, 191, 191);
  }

</style>
 


<script type="text/javascript">

 
$(document).ready(function() {

 //$('th').on('click', function(){

 // console.log("Column clicked");

      $('th').each(function(column){

          

          $(this).hover(function(){

      $(this).data("type", $(this).attr("class"));      
        $(this).addClass("clickable");

          },   

    function(){

         $(this).removeClass("clickable");

            });
   


          $(this).click(function(){

            var type = $(this).data("type");

            var records = $("table").find("tbody > tr");

          

            records.sort(function (a, b){

              var value1 = $(a).children("td").eq(column).text();

              var value2 = $(b).children("td").eq(column).text();

              if (type == "num_t") {

                value1 *=1  // поворачивает string в number
                value2 *=1
              }

                return (value1<value2)? -1 : (value1>value2 ? 1:0)

          });

            $.each(records, function(index, row) {

              $("tbody").append(row);

            });

       });

    }); 
 

  });
    </script>
   
    <div class="col-sm-6">
        <table class="tablesorter table" id="sortTable">
            <thead>
              <tr>
                <th style="text-align:center" class="text_t">Name  <i>(Click to Sort)<i></th>
                <th style="text-align:center">Email</th>  
                <th style="text-align:center" class="num_t">Age  <i>(Click to Sort)<i></th>  
               
              </tr>
            </thead>
            <tbody>
<?php
//here add function sortTable(data) {} -> and call it 
   $json_data = file_get_contents('../storage/app/data.json');
   $products=json_decode($json_data,true);
    
 ?>                 
   <?php foreach ($products as $input) :?> 

              <tr>

              <td style="text-align:center"> <?php echo $input['Name']; ?></td>
              <td style="text-align:center"> <?php  echo $input['Email']; ?></td>
              <td style="text-align:center"> <?php echo $input['Age']; ?></td>

            </tr>       

  <?php endforeach; ?>    
           
       
        </tbody>
        </table>
 
   

<div>

</body>
</html>
