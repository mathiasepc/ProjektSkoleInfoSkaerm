<?php
function total_views($conn, $page_id = null)
{
  if($page_id === null)
  {
    // count total website views
    $query = "SELECT sum(samlet_besøg) as samlet_besøg FROM antalbesøg";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if($row['samlet_besøg'] === null)
        {
          return 0;
        }
        else
        {
          return $row['samlet_besøg'];
        }
      }
    }
    else
    {
      return "No records found!";
    }
  }
  else
  {
    // count specific page views
    $query = "SELECT samlet_besøg FROM antalbesøg WHERE id='$page_id'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if($row['samlet_besøg'] === null)
        {
          return 0;
        }
        else
        {
          return $row['samlet_besøg'];
        }
      }
    }
    else
    {
      return "No records found!";
    }
  }
}

function add_view($conn, $page_id)
{    
    // At this point unique visitor record is created successfully. Now update total_views of specific page.
    $query = "UPDATE antalbesøg SET samlet_besøg = samlet_besøg + 1 WHERE id='$page_id'";
      
    if(!mysqli_query($conn, $query))
      {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

