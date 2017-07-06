<?php

	class Jumpseat extends CodonModule
	{


		public function index()
		{	

			$search = array('p.pilotid' => Auth::$userinfo->pilotid,'p.accepted' => PIREP_ACCEPTED);
      			$jumpseatdep = (!$reports) ? Auth::$userinfo->hub : $reports->arricao;

			$this->set('jumpseatdep','test');
			$this->render('jumpseat.php');
		}



		public function fly()
		{
			if (isset($this->post->action)) {
           			switch ($this->post->action) {
                			case 'fly':
					    $this->processJump();
					    $this->set('dest',$this->post->jumpseatdest);
					    $this->set('from',$this->post->departfrom);
					    $this->render('jumpseat_post.php');
					    break;
            			}
        		}
			
		}

		protected function processJump()
		{	
			// process location change
		}

	}

?>
