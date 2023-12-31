<?php include 'inc/header.php'; ?> 
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
    <?php if(empty($source)) { ?>
      <p class=lead>Hello Johne</p>
    }
    ?>

   
    

    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <?php include 'inc/footer.php'; ?> 

