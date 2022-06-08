<?php

class callMeButton extends Plugin {


    public function init()
    {
        $this->dbFields = array(
            'positioncallme'=>'',
            'color'=>'',
            'phonenumber'=>'',
            'icons'=>'',
        );
    }



    public function form()
    {
     
        $html = '
	

		
		<h4 class="mt-5">Callme button</h4>
<hr>
<p>Color button</p>
<input type="color" name="color" style="width:100%;" class="form-control colors" value="'.$this->getValue('color').'"/>


<p class="mt-4 d-block">Phone number</p>

<input type="text" placeholder="phone number" value="'.$this->getValue('phonenumber').'" name="phonenumber">

		<p class="mt-4 d-block">Position left or right</p>

		<select name="positioncallme">
		<option value="left" '.($this->getValue('positioncallme')==="left"?"selected":"").'>left</option>
        <option value="right" '.($this->getValue('positioncallme')==="right"?"selected":"").'>right</option>
		</select>

        <p class="mt-4 d-block">Choose icon</p>

		<select name="icons">
		<option value="phone" '.($this->getValue('icons')==="phone"?"selected":"").'>phone</option>
        <option value="mobile" '.($this->getValue('icons')==="mobile"?"selected":"").'>mobile</option>
		</select>
		
		<div class="bg-light col-md-12 mt-5 py-3 d-block border">
      
		<p>If you want support my work, and you want saw new plugins:) </p>

		<a href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
		</a>
		
		</div>
		';

		return $html;

    }



     
    public function siteHead(){

        $callme = '<link rel="stylesheet" href="'.$this->domainPath().'css/call_me_style.css"/>';

        return $callme;

    }

 
    public function siteBodyBegin(){

        $callme = '<div class="call_me call__me__'.$this->getValue('positioncallme').'" style="background:'.$this->getValue('color').'">
        <a href="tel:'.$this->getValue('phonenumber').'"><div class="call__me__mobile"><img src="'.$this->domainPath().'img/'.$this->getValue('icons').'.svg"/></div></a></div>';

        return $callme;

    }



    }
    
    
    ;?>