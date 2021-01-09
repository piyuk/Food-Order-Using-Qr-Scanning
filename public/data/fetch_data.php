<?php


$connect = new PDO("mysql:host=localhost;dbname=foodorder", "root", "root");

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM items WHERE status = 'Active'
	";
	
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND itemtype_id IN('".$brand_filter."')
		";
	}


	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			 <form action='."cart.store".' method="POST">
                                        


    <div class="card"style="border-radius: 10px;" >
               <div class="card-body">
                  <div class="row">
                   <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $item->i_name }}" id="i_name" name="i_name">
                                        <input type="hidden" value="{{ $item->i_price }}" id="i_price" name="i_price">
                                        <input type="hidden" value="{{ $item->itemtype_id }}" id="itemtype_id" name="itemtype_id">
                                        <input type="hidden" value="{{ $item->veg_nonveg }}" id="veg_nonveg" name="veg_nonveg">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                     <img src="img/'. $row['veg_nonveg'] .'.png" style="height: 25px; width: 25px;">
                        
                     <div class="col">
                        <span style="float: left;">
                           <h5><font color="#fffff">'. $row['i_name'] .'</font></h5>
                       
                        </span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <span style="float: left;">'. $row['i_price'] .'</span>
                        
                     </div>
                     <div class="col">

                        <a href="'."/add".'"  class="btn btn-danger" style="float: right;"><b>Add</b></a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <span style="float: left;">'. $row['itemtype_id'] .'</span>
                       
                        
                     </div>
                     
                  </div>
               </div>
            </div>
            </form>
			';
		}
	}
	else
	{
		$output = '<h3>No Food Found</h3>';
	}
	echo $output;
}

?>