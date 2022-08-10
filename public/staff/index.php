   <?php include('../../private/initialize.php') ?>
   <?php include(SHARED_PATH.'/staff_header.php') ?>
   
   <div id="content">
    <?php

      //PHP Associative Array
      $subjects=[ ['id'=>1, 'subject'=>'DataScience',     'department'=>'IT', 'accessible'=>'1'],
                  ['id'=>2, 'subject'=>'AI',              'department'=>'IT', 'accessible'=>'0'],
                  ['id'=>3, 'subject'=>'Machine&Learning', 'department'=>'IT', 'accessible'=>'0'],
                  ['id'=>4, 'subject'=>'CyberSecurity',   'department'=>'IT', 'accessible'=>'1']];
     ?>

    <table class='list'>
    <tr>
      <th>Id</th>
      <th>Subject</th>
      <th>Department</th>
      <th>Access?</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>

    </tr>


    <?php foreach($subjects as $subject) { ?>
    <tr>
        <td><?php echo h( $subject['id']);  ?></td>
        <td><?php echo h( $subject['subject']);  ?></td>
        <td><?php echo  h($subject['department']);  ?></td>
        <td><?php echo  h($subject['accessible']);  ?></td>
        <td><a href="<?php echo 'show.php?id='.u($subject['id']).'&subject='.u($subject['subject']) ?>">View</a></td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
    </tr>

    <?php } ?>

    </table>

      
   </div>
   
   <?php include(SHARED_PATH.'/staff_footer.php') ?>


   