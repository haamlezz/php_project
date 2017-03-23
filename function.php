<?php
  function book_type($type_id == NULL)
  {
    if($type_id === NULL)
    {
      
      return '<select>
        '.while($row=mysqli_fetch_array($rs))
        {

        }.'
      </select>'
    }
  }
