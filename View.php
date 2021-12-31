<div class='card shadow h-100 py-2'style='width: 300px;'>
              <div class='card-header'>
                     Chat with Your Counsellor
              </div>
              <div class='card-body'>
                    <h4 class='card-title text-grey'>Counsellor Name</h4>
                    <h5 id='counsellor' class='card-text text-primary'><?php echo $data["counsellor"];?></h5>
              </div>
              <div class='card-footer'>
                      <a href="<?php echo $data["whatsapp"];?>" target='_blank' class='btn btn-success'>Start Chat</a>
              </div>
        </div>
