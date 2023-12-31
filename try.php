
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

    <?php foreach($source as $details); ?>
    <p><?php echo $details['team']; ?></p>

    
