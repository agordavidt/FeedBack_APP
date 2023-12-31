
<?php
   
 $source = [[
    'id'=>'1',
    'team'=>'manchester',
    'coach'=>'ten hag',
    'status'=>'shit'
  ],
  [
    'id'=>'2',
    'team'=>'chelsea',
    'coach'=>'mario pochetino',
    'status'=>'mess'
    ],
    [
      'id'=>'3',
      'team'=>'liverpool',
      'coach'=>'Jorgen Klop',
      'status'=>'Excellent'
  ]
  ];

  ?>

    <h2>Feedback</h2>

    <?php if(!empty($source)): ?>
      
        <p>There is a lot to share!</p>
    <?php endif; ?> 

    <?php foreach($source as $details): ?>
        <div style="background-color: orange; color: darkgreen; border: solid 2px darkgreen; padding: 20px;
        margin: 10px;">
        <p><?php echo " Team: ${details['team']}"; ?></p>
        <p><?php echo " Coach: ${details['coach']}"; ?></p>
        <p><?php echo " Status: ${details['status']}"; ?></p>
        </div>
    
    <?php endforeach; ?>

    
